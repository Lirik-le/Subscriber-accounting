<?php

namespace Controller;

use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\Type;

class Types
{
    public function allTypes(Request $request): string
    {
        $types = Type::all();
        return new View('types.types', ['types' => $types]);
    }

    public function addType(Request $request): string
    {
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'type_of_room' => ['required', 'unique:types_of_rooms,type_of_room'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('types.addType', ['message' => $validator->errors()]);
            }

            if (Type::create($request->all()))
                app()->route->redirect('/types');
        }
        return new View('types.addType');
    }
}
