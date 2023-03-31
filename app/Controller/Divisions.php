<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Division;
use Model\Office;

class Divisions
{
    public function allDivision(Request $request): string
    {
        $divisions = Division::all();
        $office = Office::all();
        return new View('divisions.divisions', ['divisions' => $divisions, 'office' => $office]);
    }
}
