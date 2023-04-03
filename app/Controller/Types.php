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
        return new View('types.types', ['types' => $types]);
    }

    public function addType(Request $request): string
    {
        if ($request->method === 'POST' && Type::create($request->all())) {
            app()->route->redirect('/types');
        }
        return new View('types.addType');
    }
}
