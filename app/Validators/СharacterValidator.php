<?php

namespace Validators;

use Src\Validator\AbstractValidator;

class СharacterValidator extends AbstractValidator
{
    protected string $message = 'Поле :field может содержать только латиницу';

    public function rule(): bool
    {
        return preg_match('/^[a-z0-9]++$/ui',$this->value);
    }
}