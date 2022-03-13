<?php

namespace App\Http\Controllers\Admin\Upazila;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\Upazila;
use Illuminate\Http\Request;

class upazilaController extends Controller
{
    public function index()
    {
        return view('admin.upazila.index')->with(['upazilas' => Upazila::all()]); 
    }

    public function create()
    {
        return view('admin.upazila.create')->with(['districts' => District::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'district_id' => 'required',
            'slug' => 'required | string',
        ]);

        Upazila::create($request->all());

        return redirect()->route('admin.upazila.index');
    }

    public function edit($id, $slug)
    {
        $upazila = Upazila::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        $district = District::all();

        return view('admin.upazila.edit', compact('upazila','district'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'district_id' => 'required',
            'slug' => 'required | string',
        ]);

        Upazila::whereId($request->id)
            ->update($request->except(['_token']));

        return redirect()->route('admin.upazila.index');
    }
    public function destroy($id)
    {
        Upazila::whereId($id)->delete();

        return redirect()->back();
    }
}
