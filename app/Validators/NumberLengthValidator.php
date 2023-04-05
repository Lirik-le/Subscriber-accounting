<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class NumberLengthValidator extends AbstractValidator
{
    protected string $message = 'Поле :field должно содержать 6 символов!';

    public function rule(): bool
    {
        return strlen((string)$this->value) == 6;
    }
}