<?php

namespace Controller;

use Model\Office;
use Src\View;
use Src\Request;
use Model\Division;

class Divisions
{
    public function allDivisions(): string
    {
        $divisions = Division::all();
        return (new View())->render('divisions.divisions', ['divisions' => $divisions]);
    }

    public function addDivision(Request $request): string
    {
        $offices = Office::all();
        if ($request->method === 'POST' && Division::create($request->all())) {
            app()->route->redirect('/divisions');
        }
        return new View('divisions.addDivision', ['offices' => $offices]);
    }
}
