<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

use Symfony\Component\Console\Color;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Output\OutputInterface;

class SourceCodeHelper
{
    private OutputInterface $output;
    private bool $printLineNumbers = true;
    private Theme $theme;

    private function __construct(OutputInterface $output)
    {
        $this->output = $output;
        $this->theme = (new Themes())->getTheme('a11y-dark');
    }

    public static function create(OutputInterface $output = null): self
    {
        return new self($output ?? new NullOutput());
    }

    public function disableLineNumbers(): self
    {
        $this->printLineNumbers = false;

        return $this;
    }

    public function useTheme(string $theme): self
    {
        $this->theme = (new Themes())->getTheme($theme);

        return $this;
    }

    public function highlightCode(string $code): string
    {
        $lineLengths = array_map('mb_strlen', explode(PHP_EOL, $code));

        $highlightedCode = (new Highlighter($this->theme))->highlight($code);
        $highlightedCode = $this->buildBackground($highlightedCode, $lineLengths);

        return $highlightedCode;
    }

    public function write(string $code): void
    {
        $this->output->write($this->highlightCode($code).PHP_EOL);
    }

    public function writeFile(string $filePath, int $offset = 0, int $lines = null): void
    {
        if (!is_file($filePath)) {
            throw new \InvalidArgumentException(sprintf('PHP file "%s" does not exist', $filePath));
        }

        if (!is_readable($filePath)) {
            throw new \InvalidArgumentException(sprintf('PHP file "%s" is not readable', $filePath));
        }

        $highlightCode = $this->highlightCode(file_get_contents($filePath));

        $codeLines = explode(PHP_EOL, $highlightCode);

        $this->output->write(implode(PHP_EOL, array_slice($codeLines, $offset, $lines)).PHP_EOL);
    }

    private function buildBackground(string $highlightedCode, array $lineLengths): string
    {
        $color = new Color($this->theme->getComment(), $this->theme->getBackground());
        $lines = explode(PHP_EOL, $highlightedCode);
        $noLength = 2 + mb_strlen((string)count($lines));
        $maxLength = max($lineLengths);

        foreach ($lines as $no => $line) {
            $lines[$no] = $line . $color->apply(str_repeat(' ', $maxLength - $lineLengths[$no]));

            if ($this->printLineNumbers) {
                $number = str_pad(sprintf('%d: ', $no+1), $noLength, ' ', STR_PAD_LEFT);
                $lines[$no] = $color->apply($number).$lines[$no];
            }
        }

        return implode(PHP_EOL, $lines);
    }
}
