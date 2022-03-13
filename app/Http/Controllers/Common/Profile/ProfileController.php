<?php

namespace App\Http\Controllers\Common\Profile;

use App\Models\User;
use App\Models\Gender;
use App\Models\Upazila;
use App\Models\District;
use App\Models\Division;
use App\Models\Religion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $divisions = Division::all();
        $districts = District::all();
        $upazilas = Upazila::all();
        $genders = Gender::all();
        $religions = Religion::all();
        return view('common.profile.profile', compact('divisions', 'districts', 'upazilas', 'genders', 'religions', 'categories'));
    }

    public function profile_update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'username' => 'required'
        ]);

        $user_image = auth()->user()->user_image;

        if ($request->hasFile('user_image')) {
            $user_image = time() . '.' . $request->user_image->extension();
            $request->user_image->move(public_path('uploads/profile'), $user_image);
        }

        User::whereId(auth()->user()->id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'user_image' => $user_image,

        ]);

        return redirect()->back();
    }

    public function password_change(Request $request)
    {
        $this->validate($request, [
            'current_password'     => 'required',
            'new_password'     => 'required|min:6',
            'confirm_password' => 'required|same:new_password',
        ]);

        if (!Hash::check($request->current_password, auth()->user()->password)) {
            return back()->with('error', 'You have entered wrong password');
        }

        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back();
    }

    public function employee_info_update(Request $request)
    {
        $auth_user = User::whereId(auth()->user()->id)->firstOrFail();

        $auth_user->employee->update([
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
        ]);

        return redirect()->back();
    }

    public function employeer_info_update(Request $request)
    {
        $auth_user = User::whereId(auth()->user()->id)->firstOrFail();

        $auth_user->employeer->update([
            'contract_person' => $request->contract_person,
            'contact_no' => $request->contact_no,
            'address' => $request->address,
        ]);

        return redirect()->back();
    }
}
