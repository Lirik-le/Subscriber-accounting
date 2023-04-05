<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class OnlyNumbersValidator extends AbstractValidator
{
    protected string $message = 'Поле :field может содержать только цифры';

    public function rule(): bool
    {
        return preg_match('/^[0-9]++$/ui',$this->value);
    }
}