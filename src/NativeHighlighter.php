<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

use Symfony\Component\Console\Color;

class NativeHighlighter implements Highlighter
{
    private Theme $theme;
    private array $colorMap;

    public function __construct(Theme $theme)
    {
        $this->theme = $theme;

        $this->colorMap = [
            ini_get('highlight.comment') => $theme->getComment(),
            ini_get('highlight.default') => $theme->getVariable(),
            ini_get('highlight.html') => $theme->getOperator(),
            ini_get('highlight.keyword') => $theme->getKeyword(),
            ini_get('highlight.string') => $theme->getString(),
        ];
    }

    public function highlight(string $code): string
    {
        /** @var Color[] $colors */
        $colors = [];

        return trim(preg_replace_callback_array([
            '@\<code\><span style="color: #[0-9a-fA-F]{1,6}"\>@' => fn () => '',
            '@\<\/span>\s<\/code\>@' => fn () => '',
            '@\<span style="color: (#[0-9a-fA-F]{1,6})"\>@' => function ($match) use (&$colors) {
                $colors[] = new Color($this->colorMap[$match[1]], $this->theme->getBackground());

                return end($colors)->set();
            },
            '@\<br /\>@' => static function () use (&$colors) {
                return end($colors)->unset().PHP_EOL.end($colors)->set();
            },
            '@\</span\>@' => static function () use (&$colors) {
                return array_pop($colors)->unset();
            }],
            html_entity_decode(highlight_string($code, true))
        ));
    }
}
