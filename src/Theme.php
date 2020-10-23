<?php

declare(strict_types=1);

namespace Stoffel\Console\SourceCode;

class Theme
{
    private string $background;
    private string $text;
    private string $variable;
    private string $attribute;
    private string $definition;
    private string $keyword;
    private string $operator;
    private string $property;
    private string $number;
    private string $string;
    private string $comment;
    private string $meta;

    public function __construct(array $colors)
    {
        $this->background = $colors['background'] ?? '';
        $this->text = $colors['text'] ?? '';
        $this->variable = $colors['variable'] ?? '';
        $this->attribute = $colors['attribute'] ?? '';
        $this->definition = $colors['definition'] ?? '';
        $this->keyword = $colors['keyword'] ?? '';
        $this->operator = $colors['operator'] ?? '';
        $this->property = $colors['property'] ?? '';
        $this->number = $colors['number'] ?? '';
        $this->string = $colors['string'] ?? '';
        $this->comment = $colors['comment'] ?? '';
        $this->meta = $colors['meta'] ?? '';
    }

    public function getBackground(): string
    {
        return $this->background;
    }

    public function getText(): string
    {
        return $this->text;
    }

    public function getVariable(): string
    {
        return $this->variable;
    }

    public function getAttribute(): string
    {
        return $this->attribute;
    }

    public function getDefinition(): string
    {
        return $this->definition;
    }

    public function getKeyword(): string
    {
        return $this->keyword;
    }

    public function getOperator(): string
    {
        return $this->operator;
    }

    public function getProperty(): string
    {
        return $this->property;
    }

    public function getNumber(): string
    {
        return $this->number;
    }

    public function getString(): string
    {
        return $this->string;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function getMeta(): string
    {
        return $this->meta;
    }
}
