<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

interface Highlighter
{
    public function highlight(string $code): string;
}
