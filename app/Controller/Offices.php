<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Office;

class Offices
{
    public function allOffices(Request $request): string
    {
        $offices = Office::all();
        return new View('offices.offices', ['offices' => $offices]);
    }
}
