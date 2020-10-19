# Console SourceCode
Helper to render source code using Symfony Console Component.

## Example

```bash
$ git clone git@github.com:chr-hertel/console-sourcecode.git
$ cd console-image
$ composer install
$ example/php-code
$ example/php-file
```

## Installation

```bash
$ composer require stoffel/console-sourcecode
```

Usage in PHP

```php
use Stoffel\Console\SourceCode\SourceCodeHelper;

SourceCodeHelper::create($output)
    ->writeFile('/path/to/source-file.php');

// only an excerpt
SourceCodeHelper::create($output)
    ->writeFile('/path/to/source-file.php', 59, 17);

// with explicit color config
SourceCodeHelper::create($output, ['comment' => '#000000', 'keyword' => '#FFDD00'])
    ->writeFile('/path/to/source-file.php');
```
