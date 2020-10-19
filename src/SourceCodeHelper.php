<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

use Symfony\Component\Console\Color;
use Symfony\Component\Console\Output\NullOutput;
use Symfony\Component\Console\Output\OutputInterface;

class SourceCodeHelper
{
    private const DEFAULT_THEME = [
        'comment' => '#F8F8F2',
        'default' => '#FFD700',
        'html' => '#DCC6E0',
        'keyword' => '#00E0E0',
        'string' => '#ABE338',
    ];

    private OutputInterface $output;
    private array $colorMap;

    private function __construct(OutputInterface $output, array $theme = self::DEFAULT_THEME)
    {
        $this->output = $output;

        $this->colorMap = [
            ini_get('highlight.comment') => $theme['comment'] ?? self::DEFAULT_THEME['comment'],
            ini_get('highlight.default') => $theme['default'] ?? self::DEFAULT_THEME['default'],
            ini_get('highlight.html') => $theme['html'] ?? self::DEFAULT_THEME['html'],
            ini_get('highlight.keyword') => $theme['keyword'] ?? self::DEFAULT_THEME['keyword'],
            ini_get('highlight.string') => $theme['string'] ?? self::DEFAULT_THEME['string'],
        ];
    }

    public static function create(OutputInterface $output = null): self
    {
        return new self($output ?? new NullOutput());
    }

    public function highlightCode(string $code, int $lineNumber = 1): string
    {
        $lineNumberColor = new Color('#999999');
        $lines = mb_substr_count($code, PHP_EOL) + 1;

        /** @var Color[] $colors */
        $colors = [];

        $renderLineNumber = static function () use ($lineNumberColor, $lines, &$lineNumber, &$colors) {
            $activeColor = end($colors);
            $unset = $activeColor instanceof Color ? $activeColor->unset() : '';
            $set = $activeColor instanceof Color ? $activeColor->set() : '';

            return $unset.$lineNumberColor->apply(
                str_pad(sprintf('%d: ', $lineNumber++), 2 + mb_strlen((string)$lines), ' ', STR_PAD_LEFT)
            ).$set;
        };

        return $renderLineNumber().trim(preg_replace_callback_array([
            '@\<code\><span style="color: #[0-9a-fA-F]{1,6}"\>@' => fn () => '',
            '@\<\/span>\s<\/code\>@' => fn () => '',
            '@\<span style="color: (#[0-9a-fA-F]{1,6})"\>@' => function ($match) use (&$colors) {
                $colors[] = new Color($this->colorMap[$match[1]]);

                return end($colors)->set();
            },
            '@\<br /\>@' => fn () => PHP_EOL.$renderLineNumber(),
            '@\</span\>@' => static function () use (&$colors) {
                return array_pop($colors)->unset();
            }],
            html_entity_decode(highlight_string($code, true))
        ));
    }

    public function write(string $code, int $lineNumber = 1): void
    {
        $this->output->write($this->highlightCode($code, $lineNumber).PHP_EOL);
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
}
