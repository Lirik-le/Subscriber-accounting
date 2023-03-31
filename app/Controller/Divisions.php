<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Division;

class Divisions
{
    public function allDivision(Request $request): string
    {
        $divisions = Division::all();
        return new View('divisions.divisions', ['divisions' => $divisions]);
    }
}
