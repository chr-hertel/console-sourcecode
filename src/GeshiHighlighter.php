<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

use GeSHi;
use RuntimeException;
use Symfony\Component\Console\Color;

class GeshiHighlighter implements Highlighter
{
    private Theme $theme;

    public function __construct(Theme $theme)
    {
        if (!class_exists(GeSHi::class)) {
            throw new RuntimeException('Please install geshi/geshi to use GeshiHighlighter');
        }

        $this->theme = $theme;
    }

    public function highlight(string $code): string
    {
        /** @var Color[] $colors */
        $colors = [];

        return trim(preg_replace_callback_array([
            '@\<span style="color: (#[0-9a-fA-F]{1,6});( font-weight: bold;)?( font-style: italic;)?"\>@' => function ($match) use (&$colors) {
                $colors[] = new Color($match[1], $this->theme->getBackground());

                return end($colors)->set();
            },
            '@\<br /\>@' => fn () => '',
            '@\</span\>@' => static function () use (&$colors) {
                return array_pop($colors)->unset();
            }],
            html_entity_decode($this->parseGeshi($code))
        ));
    }

    private function parseGeshi($code): string
    {
        $geshi = new GeSHi($code, 'php');
        $geshi->enable_keyword_links(false);
        $geshi->set_header_type(GESHI_HEADER_NONE);

        return $geshi->parse_code();
    }
}
