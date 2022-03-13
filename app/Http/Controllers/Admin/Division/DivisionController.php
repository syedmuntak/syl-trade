<?php

namespace App\Http\Controllers\Admin\Division;

use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return view('admin.divisions.index')
            ->with(['divisions' => Division::all()]);
    }

    public function create()
    {
        return view('admin.divisions.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Division::create($request->all());

        return redirect()->route('admin.division.index');
    }

    public function edit($id, $slug)
    {
        $division = Division::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        return view('admin.divisions.edit', compact('division'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Division::whereId($request->id)
            ->update($request->except(['_token']));

        return redirect()->route('admin.division.index');
    }

    public function destroy($id)
    {
        Division::whereId($id)->delete();

        return redirect()->back();
    }
}
