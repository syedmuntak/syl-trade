<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = User::whereUser_role('Employee')->get();
        return view('admin.users.employee.employee', compact('employees'));
    }
}
