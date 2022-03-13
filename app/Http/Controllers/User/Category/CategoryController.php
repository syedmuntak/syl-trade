<?php

namespace App\Http\Controllers\User\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Employee;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereStatus(1)
            ->with('profiles')
            ->get();
        $employees = Employee::whereStatus(1)->get();
        return view('user.category.category', compact('categories', 'employees'));
    }

    public function category_wise_profile($id, $slug)
    {
        $categories = Category::whereStatus(1)
            ->with('profiles')
            ->get();
        $category = Category::whereId($id)->whereSlug($slug)->firstOrFail();
        $profiles = Employee::whereCategory_id($category->id)->get();

        return view('user.category.category-wise-profile',compact(
            'categories',
            'category',
            'profiles'
        ));
    }

    public function search_employee(Request $request)
    {
        // dd($request->all());
        $district = $request->district_id;
        $category = $request->category_id;

        if ($district == null && $category == null) {
            $employees = Employee::all();
        }
        if ($district == null && $category !== null) {
            $employees = Employee::whereCategory_id($category)->get();
        }

        if ($district !== null && $category == null) {
            $employees = Employee::whereDistrict_id($district)->get();
        }

        if ($district !== null && $category !== null) {
            $employees = Employee::where([
                'district_id' => $district,
                'category_id' => $category
            ])->get();
        }

        return view('user.search', compact('employees'));
    }
}
