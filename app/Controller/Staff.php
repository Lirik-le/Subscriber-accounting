<?php

namespace Controller;

use Src\View;
use Src\Request;
use Model\Employee;

class Staff
{
    public function allStaff(Request $request): string
    {
        $staff = Employee::all();
        return new View('staff.staff', ['staff' => $staff]);
    }
}
