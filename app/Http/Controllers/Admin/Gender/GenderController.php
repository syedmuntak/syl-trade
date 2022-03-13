<?php

namespace App\Http\Controllers\Admin\Gender;

use App\Models\Gender;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GenderController extends Controller
{
    public function index()
    {
        return view('admin.genders.index')
            ->with(['genders' => Gender::all()]);
    }

    public function create()
    {
        return view('admin.genders.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Gender::create($request->all());

        return redirect()->route('admin.gender.index');
    }

    public function edit($id, $slug)
    {
        $gender = Gender::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        return view('admin.genders.edit', compact('gender'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Gender::whereId($request->id)
            ->update($request->except(['_token']));

        return redirect()->route('admin.gender.index');
    }

    public function destroy($id)
    {
        Gender::whereId($id)->delete();

        return redirect()->back();
    }
}
