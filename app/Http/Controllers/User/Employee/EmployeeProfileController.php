<?php

namespace App\Http\Controllers\User\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeProfileController extends Controller
{
    public function employee_profile($id)
    {
        $employee = Employee::whereId($id)
            ->with([
                'user',
                'category',

            ])
            ->firstOrFail();

        return view('user.employee.profile', compact('employee'));
    }
}
