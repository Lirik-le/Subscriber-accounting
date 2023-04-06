<?php

namespace Controller;

use Src\Validator\Validator;
use Src\View;
use Src\Request;
use Model\Office;

class Offices
{
    public function allOffices(): string
    {
        $offices = Office::all();
        return new View('offices.offices', ['offices' => $offices]);
    }

    public function addOffice(Request $request): string
    {
        if ($request->method === 'POST') {
            $validator = new Validator($request->all(), [
                'name_office' => ['required', 'unique:offices,name_office'],
                'address' => ['required'],
                'director' => ['required']
            ], [
                'required' => 'Поле :field пусто',
                'unique' => 'Поле :field должно быть уникально'
            ]);

            if ($validator->fails()) {
                return new View('offices.addOffice', ['message' => $validator->errors()]);
            }

            if (Office::create($request->all()))
                app()->route->redirect('/offices');
        }
        return new View('offices.addOffice');
    }
}
