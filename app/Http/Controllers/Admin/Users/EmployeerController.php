<?php

namespace App\Http\Controllers\Admin\Users;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EmployeerController extends Controller
{
    public function index()
    {
        $employeers = User::whereUser_role('Employeer')->get();
        return view('admin.users.employeer.employeer', compact('employeers'));
    }
}
