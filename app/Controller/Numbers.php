<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Number;

class Numbers
{
    public function allNumbers(Request $request): string
    {
        $numbers = Number::all();
        return new View('numbers.numbers', ['numbers' => $numbers]);
    }
}
