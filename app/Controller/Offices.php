<?php

namespace Controller;

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
        if ($request->method === 'POST' && Office::create($request->all())) {
            app()->route->redirect('/offices');
        }
        return new View('offices.addOffice');
    }
}
