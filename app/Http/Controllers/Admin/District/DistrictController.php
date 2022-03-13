<?php

namespace App\Http\Controllers\Admin\District;

use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Division;

class DistrictController extends Controller
{
    public function index()
    {
        return view('admin.districts.index')
            ->with(['districts' => District::all()]);
    }

    public function create()
    {
        return view('admin.districts.create')
            ->with(['divisions' => Division::all()]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'division_id' => 'required',
            'slug' => 'required | string',
        ]);

        District::create($request->all());

        return redirect()->route('admin.district.index');
    }

    public function edit($id, $slug)
    {
        $district = District::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        $divisions = Division::all();

        return view('admin.districts.edit', compact('district', 'divisions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'division_id' => 'required',
            'slug' => 'required | string',
        ]);

        District::whereId($request->id)
            ->update($request->except(['_token']));

        return redirect()->route('admin.district.index');
    }

    public function destroy($id)
    {
        District::whereId($id)->delete();

        return redirect()->back();
    }
}
