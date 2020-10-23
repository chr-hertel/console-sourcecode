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

// print code from variable
SourceCodeHelper::create($output)
    ->write($code);

// print code from file
SourceCodeHelper::create($output)
    ->writeFile('/path/to/source-file.php');

// print only an excerpt
SourceCodeHelper::create($output)
    ->writeFile('/path/to/source-file.php', 59, 17);

// chose one of the predefined themes
SourceCodeHelper::create($output)
    ->useTheme('seti')
    ->writeFile('/path/to/source-file.php');

// disable line numbers
SourceCodeHelper::create($output)
    ->disableLineNumbers()
    ->writeFile('/path/to/source-file.php');
```
