<?php

namespace App\Http\Controllers\User\Auth;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Employee;
use App\Models\Employeer;
use App\Models\Upazila;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function districts(Request $request)
    {
        $districts = District::whereDivision_id($request->division_id)
            ->get();
        return $districts;
    }

    public function upazilas(Request $request)
    {
        $upazilas = Upazila::whereDistrict_id($request->district_id)
            ->get();
        return $upazilas;
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'username' => 'required | unique:users',
            'email' => 'email | required | unique:users'
        ]);

        DB::beginTransaction();
        try {
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'username' => $request->username,
                'user_role' => $request->user_role
            ]);

            $user_id = $user->id;

            if (!$request->user_role === "") {
                return;
            }

            if ($request->user_role === 'Employeer') {

                Employeer::create([
                    'contract_person' => $request->contract_person,
                    'contact_no' => $request->contact_no,
                    'address' => $request->address,
                    'user_id' => $user_id
                ]);
            }

            if ($request->user_role === 'Employee') {

                if ($request->category_id === "") {
                    return redirect()->back()->with('message', 'You must select a category');
                }

                Employee::create([
                    'address' => $request->address,
                    'contact_no' => $request->contact_no,
                    'category_id' => $request->category_id,
                    'gender_id' => $request->gender_id,
                    'religion_id' => $request->religion_id,
                    'division_id' => $request->division_id,
                    'district_id' => $request->district_id,
                    'upazila_id' => $request->upazila_id,
                    'job_type' => $request->job_type,
                    'skill_level' => $request->skill_level,
                    'location' => $request->location,
                    'minimum_cost' => $request->minimum_cost,
                    'user_id' => $user_id
                ]);
            }

            DB::commit();
        } catch (\Throwable $th) {
            DB::rollback();
            throw $th->getMessage() . "line" . $th->getLine();
        }


        return redirect()->to('login');
    }
}
