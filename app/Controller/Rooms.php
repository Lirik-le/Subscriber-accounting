<?php

namespace Controller;

use Model\Division;
use Model\Type;
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
        if ($request->method === 'POST' && Room::create($request->all())) {
            app()->route->redirect('/rooms');
        }
        return new View('rooms.addRoom', ['types' => $types, 'divisions' => $divisions]);
    }
}
