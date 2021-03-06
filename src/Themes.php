<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

/**
 * Themes based on selection of carbon.now.sh (https://github.com/carbon-app/carbon).
 */
class Themes
{
    private const THEMES = [
        '3024-night' => [
            'background' =>'#090300',
            'text' =>'#d6d5d4',
            'variable' =>'#01a252',
            'attribute' =>'#00c',
            'definition' =>'#e8bbd0',
            'keyword' =>'#db2d20',
            'operator' =>'#fff',
            'property' =>'#01a252',
            'number' =>'#a16a94',
            'string' =>'#fded02',
            'comment' =>'#cdab53',
            'meta' =>'#555',
        ],
        'a11y-dark' => [
            'background' =>'#2b2b2b',
            'text' =>'#f8f8f2',
            'variable' =>'#00e0e0',
            'attribute' =>'#abe338',
            'definition' =>'#ffd700',
            'keyword' =>'#ffa07a',
            'operator' =>'#f8f8f2',
            'property' =>'#abe338',
            'number' =>'#dcc6e0',
            'string' =>'#ffd700',
            'comment' =>'#d4d0ab',
            'meta' =>'#d4d0ab',
        ],
        'blackboard' => [
            'background' =>'#0C1021',
            'text' =>'#F8F8F8',
            'variable' =>'#FF6400',
            'attribute' =>'#8DA6CE',
            'definition' =>'#8DA6CE',
            'keyword' =>'#FBDE2D',
            'operator' =>'#fff',
            'property' =>'#fff',
            'number' =>'#D8FA3C',
            'string' =>'#61CE3C',
            'comment' =>'#AEAEAE',
            'meta' =>'#D8FA3C',
        ],
        'base16-dark' => [
            'background' =>'#151515',
            'text' =>'#e0e0e0',
            'variable' =>'#90a959',
            'attribute' =>'#00c',
            'definition' =>'#d28445',
            'keyword' =>'#ac4142',
            'operator' =>'#fff',
            'property' =>'#90a959',
            'number' =>'#aa759f',
            'string' =>'#f4bf75',
            'comment' =>'#8f5536',
            'meta' =>'#555',
        ],
        'base16-light' => [
            'background' =>'#f5f5f5',
            'text' =>'#202020',
            'variable' =>'#90a959',
            'attribute' =>'#90a959',
            'definition' =>'#d28445',
            'keyword' =>'#ac4142',
            'operator' =>'#fff',
            'property' =>'#90a959',
            'number' =>'#aa759f',
            'string' =>'#f4bf75',
            'comment' =>'#8f5536',
            'meta' =>'#555',
        ],
        'cobalt' => [
            'background' =>'#002240',
            'text' =>'#fff',
            'variable' =>'#9effff',
            'attribute' =>'#ff80e1',
            'definition' =>'#fff',
            'keyword' =>'#ffee80',
            'operator' =>'#fff',
            'property' =>'#fff',
            'number' =>'#ff80e1',
            'string' =>'#3ad900',
            'comment' =>'#08f',
            'meta' =>'#ff9d00',
        ],
        'dracula' => [
            'background' =>'#282a36',
            'text' =>'#f8f8f2',
            'variable' =>'#50fa7b',
            'attribute' =>'#50fa7b',
            'definition' =>'#50fa7b',
            'keyword' =>'#ff79c6',
            'operator' =>'#ff79c6',
            'property' =>'#66d9ef',
            'number' =>'#bd93f9',
            'string' =>'#f1fa8c',
            'comment' =>'#6272a4',
            'meta' =>'#f8f8f2',
        ],
        'duotone-dark' => [
            'background' =>'#2a2734',
            'text' =>'#6c6783',
            'variable' =>'#ffcc99',
            'attribute' =>'#ffcc99',
            'definition' =>'#eeebff',
            'keyword' =>'#ffcc99',
            'operator' =>'#ffad5c',
            'property' =>'#9a86fd',
            'number' =>'#ffcc99',
            'string' =>'#ffb870',
            'comment' =>'#6c6783',
            'meta' =>'#555',
        ],
        'hopscotch' => [
            'background' =>'#322931',
            'text' =>'#d5d3d5',
            'variable' =>'#8fc13e',
            'attribute' =>'#8fc13e',
            'definition' =>'#fd8b19',
            'keyword' =>'#dd464c',
            'operator' =>'#fff',
            'property' =>'#8fc13e',
            'number' =>'#c85e7c',
            'string' =>'#fdcc59',
            'comment' =>'#b33508',
            'meta' =>'#555',
        ],
        'lucario' => [
            'background' =>'#2b3e50',
            'text' =>'#f8f8f2',
            'variable' =>'#f8f8f2',
            'attribute' =>'#66D9EF',
            'definition' =>'#72C05D',
            'keyword' =>'#ff6541',
            'operator' =>'#66D9EF',
            'property' =>'#f8f8f2',
            'number' =>'#ca94ff',
            'string' =>'#E6DB74',
            'comment' =>'#5c98cd',
            'meta' =>'#f8f8f2',
        ],
        'material' => [
            'background' =>'#263238',
            'text' =>'rgba(233, 237, 237, 1)',
            'variable' =>'#82B1FF',
            'attribute' =>'#FFCB6B',
            'definition' =>'rgba(233, 237, 237, 1)',
            'keyword' =>'rgba(199, 146, 234, 1)',
            'operator' =>'rgba(233, 237, 237, 1)',
            'property' =>'#80CBAE',
            'number' =>'#F77669',
            'string' =>'#C3E88D',
            'comment' =>'#546E7A',
            'meta' =>'#80CBC4',
        ],
        'monokai' => [
            'background' =>'#272822',
            'text' =>'#f8f8f2',
            'variable' =>'#f8f8f2',
            'attribute' =>'#a6e22e',
            'definition' =>'#fd971f',
            'keyword' =>'#f92672',
            'operator' =>'#fff',
            'property' =>'#a6e22e',
            'number' =>'#ae81ff',
            'string' =>'#e6db74',
            'comment' =>'#75715e',
            'meta' =>'#555',
        ],
        'night-owl' => [
            'background' =>'#011627',
            'text' =>'#abb2bf',
            'variable' =>'#82AAFF',
            'attribute' =>'#F78C6C',
            'definition' =>'#82AAFF',
            'keyword' =>'#c792ea',
            'operator' =>'#c792ea',
            'property' =>'#fff',
            'number' =>'#F78C6C',
            'string' =>'#ecc48d',
            'comment' =>'#5c6370',
            'meta' =>'#7fdbca',
        ],
        'nord' => [
            'background' =>'#2e3440',
            'text' =>'#d8dee9',
            'variable' =>'#88C0D0',
            'attribute' =>'#8FBCBB',
            'definition' =>'#D8DEE9',
            'keyword' =>'#81A1C1',
            'operator' =>'#81A1C1',
            'property' =>'#D8DEE9',
            'number' =>'#B48EAD',
            'string' =>'#A3BE8C',
            'comment' =>'#4C566A',
            'meta' =>'#81A1C1',
        ],
        'oceanic-next' => [
            'background' =>'#304148',
            'text' =>'#f8f8f2',
            'variable' =>'#f8f8f2',
            'attribute' =>'#C594C5',
            'definition' =>'#6699CC',
            'keyword' =>'#C594C5',
            'operator' =>'#fff',
            'property' =>'#99C794',
            'number' =>'#F99157',
            'string' =>'#99C794',
            'comment' =>'#65737E',
            'meta' =>'#555',
        ],
        'one-light' => [
            'background' =>'#fafafa',
            'text' =>'#383a42',
            'variable' =>'#e06c75',
            'attribute' =>'#d19a66',
            'definition' =>'#4078f2',
            'keyword' =>'#a626a4',
            'operator' =>'#0184bc',
            'property' =>'#4078f2',
            'number' =>'#986801',
            'string' =>'#50a14f',
            'comment' =>'#a0a1a7',
            'meta' =>'#383a42',
        ],
        'one-dark' => [
            'background' =>'#282c34',
            'text' =>'#abb2bf',
            'variable' =>'#e06c75',
            'attribute' =>'#d19a66',
            'definition' =>'#e5c07b',
            'keyword' =>'#c678dd',
            'operator' =>'#56b6c2',
            'property' =>'#56b6c2',
            'number' =>'#d19a66',
            'string' =>'#98c379',
            'comment' =>'#5c6370',
            'meta' =>'#abb2bf',
        ],
        'panda-syntax' => [
            'background' =>'#292A2B',
            'text' =>'#E6E6E6',
            'variable' =>'#ffb86c',
            'attribute' =>'#ffb86c',
            'definition' =>'#e6e6e6',
            'keyword' =>'#FF75B5',
            'operator' =>'#f3f3f3',
            'property' =>'#f3f3f3',
            'number' =>'#FFB86C',
            'string' =>'#19F9D8',
            'comment' =>'#676B79',
            'meta' =>'#b084eb',
        ],
        'paraiso-dark' => [
            'background' =>'#2f1e2e',
            'text' =>'#b9b6b0',
            'variable' =>'#48b685',
            'attribute' =>'#48b685',
            'definition' =>'#f99b15',
            'keyword' =>'#ef6155;',
            'operator' =>'#fff',
            'property' =>'#48b685',
            'number' =>'#815ba4',
            'string' =>'#fec418',
            'comment' =>'#e96ba8',
            'meta' =>'#555',
        ],
        'seti' => [
            'background' =>'#151718',
            'text' =>'#CFD2D1',
            'variable' =>'#55b5db',
            'attribute' =>'#9fca56',
            'definition' =>'#55b5db',
            'keyword' =>'#e6cd69',
            'operator' =>'#9fca56',
            'property' =>'#a074c4',
            'number' =>'#cd3f45',
            'string' =>'#55b5db',
            'comment' =>'#41535b',
            'meta' =>'#55b5db',
        ],
        'shades-of-purple' => [
            'background' =>'#2D2B55',
            'text' =>'#FFFFFF',
            'variable' =>'#9EFFFF',
            'attribute' =>'#9EFFFF',
            'definition' =>'#9EFFFF',
            'keyword' =>'#FF9D00',
            'operator' =>'#FF9D00',
            'property' =>'#FAD000',
            'number' =>'#FF628C',
            'string' =>'#A5FF90',
            'comment' =>'#B362FF',
            'meta' =>'#FF9D00',
        ],
        'solarized dark' => [
            'background' =>'#002b36',
            'text' =>'#839496',
            'variable' =>'#839496',
            'attribute' =>'#2aa198',
            'definition' =>'#2aa198',
            'keyword' =>'#cb4b16',
            'operator' =>'#6c71c4',
            'property' =>'#2aa198',
            'number' =>'#d33682',
            'string' =>'#859900',
            'comment' =>'#586e75',
            'meta' =>'#859900',
        ],
        'solarized light' => [
            'background' =>'#fdf6e3',
            'text' =>'#657b83',
            'variable' =>'#839496',
            'attribute' =>'#2aa198',
            'definition' =>'#2aa198',
            'keyword' =>'#cb4b16',
            'operator' =>'#6c71c4',
            'property' =>'#2aa198',
            'number' =>'#d33682',
            'string' =>'#859900',
            'comment' =>'#586e75',
            'meta' =>'#859900',
        ],
        'synthwave-84' => [
            'background' =>'#2b213a',
            'text' =>'#b6b1b1',
            'variable' =>'#f92aad',
            'attribute' =>'#fff5f6',
            'definition' =>'#fdfdfd',
            'keyword' =>'#f4eee4',
            'operator' =>'#f4eee4',
            'property' =>'#fdfdfd',
            'number' =>'#f97e72',
            'string' =>'#ff8b39',
            'comment' =>'#6d77b3',
            'meta' =>'#ff8b39',
        ],
        'twilight' => [
            'background' =>'#141414',
            'text' =>'#f7f7f7',
            'variable' =>'#607392',
            'attribute' =>'#d6bb6d',
            'definition' =>'#607392',
            'keyword' =>'#f9ee98',
            'operator' =>'#cda869',
            'property' =>'#fff',
            'number' =>'#ca7841',
            'string' =>'#8f9d6a',
            'comment' =>'#777',
            'meta' =>'#f7f7f7',
        ],
        'verminal' => [
            'background' =>'rgba(0, 0, 0, 0.85)',
            'text' =>'#fff',
            'variable' =>'#ff9ba3',
            'attribute' =>'#d19a66',
            'definition' =>'#34B7FF',
            'keyword' =>'#9AE1FF',
            'operator' =>'#FA78C3',
            'property' =>'#0af',
            'number' =>'#d19a66',
            'string' =>'#98c379',
            'comment' =>'#5c6370',
            'meta' =>'#abb2bf',
        ],
        'vscode' => [
            'background' =>'#1E1E1E',
            'text' =>'#D4D4D4',
            'variable' =>'#9CDCFE',
            'attribute' =>'#d19a66',
            'definition' =>'#DCDCAA',
            'keyword' =>'#C586C0',
            'operator' =>'#D4D4D4',
            'property' =>'#DCDCAA',
            'number' =>'#B5CEA8',
            'string' =>'#CE9178',
            'comment' =>'#6A9955',
            'meta' =>'#D4D4D4',
        ],
        'yeti' => [
            'background' =>'#ECEAE8',
            'text' =>'#d1c9c0',
            'variable' =>'#55b5db',
            'attribute' =>'#9fb96e',
            'definition' =>'#55b5db',
            'keyword' =>'#9fb96e',
            'operator' =>'#9fb96e',
            'property' =>'#a074c4',
            'number' =>'#a074c4',
            'string' =>'#96c0d8',
            'comment' =>'#d4c8be',
            'meta' =>'#96c0d8',
        ],
        'zenburn' => [
            'background' =>'#3f3f3f',
            'text' =>'#dcdccc',
            'variable' =>'#dfaf8f',
            'attribute' =>'#dfaf8f',
            'definition' =>'#dcdccc',
            'keyword' =>'#f0dfaf',
            'operator' =>'#f0efd0',
            'property' =>'#dfaf8f',
            'number' =>'#dcdccc',
            'string' =>'#cc9393',
            'comment' =>'#7f9f7f',
            'meta' =>'#f0dfaf',
        ],
    ];

    public function getAllThemes(): array
    {
        return array_keys(static::THEMES);
    }

    public function getTheme(string $name): Theme
    {
        if (!array_key_exists($name, static::THEMES)) {
            $values = implode(', ', $this->getAllThemes());

            throw new \InvalidArgumentException(sprintf('Theme name "%s" is not valid, use %s', $name, $values));
        }

        return new Theme(static::THEMES[$name]);
    }
}
