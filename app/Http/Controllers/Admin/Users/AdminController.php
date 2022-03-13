<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    public function index()
    {
        $admins = User::whereUser_role('Admin')->get();
        return view('admin.users.admin.admin', compact('admins'));
    }

    public function create()
    {
        return view('admin.users.admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'email' => 'required | string',
            'username' => 'required | string',
            'password' => 'required | string | min:8',
        ]);

        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'email_verified_at' => now(),
            'user_role' => 'Admin'
        ]);

        return redirect()->route('admin.users.admins.index');
    }


    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $user = User::whereId($id)->firstOrFail();
        return view('admin.users.admin.update', compact('user'));
    }


    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'email' => 'required | string',
            'username' => 'required | string'
        ]);

        User::whereId($request->id)->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
        ]);

        return redirect()->route('admin.users.admins.index');
    }


    public function destroy($id)
    {
        User::whereId($id)->delete();

        return redirect()->back();
    }
}
