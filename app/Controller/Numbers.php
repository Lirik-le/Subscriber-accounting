<?php

namespace Controller;

use Model\Room;
use Src\Validator\Validator;
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
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'number' => ['required', 'unique:numbers,number', 'number', 'onlyNum'],
                'id_room' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально',
                'number' => 'Поле :field должно содержать 6 символов!',
                'onlyNum' => 'Поле :field может содержать только цифры',
            ]);

            if ($validator->fails()) {
                return new View('numbers.addNumber',
                    ['message' => $validator->errors(), 'rooms' => $rooms]);
            }

            if (Number::create($request->all()))
                app()->route->redirect('/numbers');
        }
        return new View('numbers.addNumber', ['rooms' => $rooms]);
    }

}
