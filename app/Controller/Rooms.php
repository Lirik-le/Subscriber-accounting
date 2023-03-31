<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Room;

class Rooms
{
    public function allRooms(Request $request): string
    {
        $rooms = Room::all();
        return new View('rooms.rooms', ['rooms' => $rooms]);
    }
}
