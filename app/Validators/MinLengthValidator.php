<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class MinLengthValidator extends AbstractValidator
{
    protected string $message = 'Поле :field должно содержать минимум 6 символов!';

    public function rule(): bool
    {
        return strlen((string)$this->value) >= 6;
    }
}