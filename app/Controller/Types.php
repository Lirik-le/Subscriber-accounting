<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Type;

class Types
{
    public function allTypes(Request $request): string
    {
        $types = Type::all();
        return new View('type.type', ['types' => $types]);
    }
}
