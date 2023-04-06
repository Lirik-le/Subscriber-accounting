<?php

namespace Controller;

use Model\Office;
use Src\Validator\Validator;
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
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'name_division' => ['required', 'unique:divisions,name_division'],
                'type_of_division' => ['required'],
                'id_office' => ['required'],
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('divisions.addDivision',
                    ['message' => $validator->errors(), 'offices' => $offices]);
            }

            if (Division::create($request->all()))
                app()->route->redirect('/divisions');
        }
        return new View('divisions.addDivision', ['offices' => $offices]);
    }
}
