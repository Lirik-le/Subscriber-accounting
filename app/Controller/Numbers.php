<?php

namespace Controller;

use Model\Room;
use Src\View;
use Src\Request;
use Model\Number;

class Numbers
{
    public function allNumbers(): string
    {
        $numbers = Number::all();
        return new View('numbers.numbers', ['numbers' => $numbers]);
    }

    public function addNumber(Request $request): string
    {
        $rooms = Room::all();
        if ($request->method === 'POST' && Number::create($request->all())) {
            app()->route->redirect('/numbers');
        }
        return new View('numbers.addNumber', ['rooms' => $rooms]);
    }

}
