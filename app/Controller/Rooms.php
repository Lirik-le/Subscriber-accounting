<?php

namespace Controller;

use Model\Division;
use Model\Type;
use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\Room;

class Rooms
{
    public function allRooms(): string
    {
        $rooms = Room::all();
        return new View('rooms.rooms', ['rooms' => $rooms]);
    }

    public function addRoom(Request $request): string
    {
        $types = Type::all();
        $divisions = Division::all();
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'room_number' => ['required', 'unique:rooms,room_number'],
                'id_division' => ['required'],
                'id_type' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('rooms.addRoom',
                    ['message' => $validator->errors(), 'types' => $types, 'divisions' => $divisions]);
            }

            if (Room::create($request->all()))
                app()->route->redirect('/rooms');
        }
        return new View('rooms.addRoom', ['types' => $types, 'divisions' => $divisions]);
    }
}
