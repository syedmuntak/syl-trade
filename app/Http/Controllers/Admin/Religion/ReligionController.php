<?php

namespace App\Http\Controllers\Admin\Religion;

use App\Http\Controllers\Controller;
use App\Models\Religion;
use Illuminate\Http\Request;

class ReligionController extends Controller
{
    public function index()
    {
        return view('admin.religion.index')
            ->with(['religions' => Religion::all()]);
    }

    public function create()
    {
        return view('admin.religion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Religion::create($request->all());

        return redirect()->route('admin.religion.index');
    }

    public function edit($id, $slug)
    {
        $religion = Religion::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        return view('admin.religion.edit', compact('religion'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        Religion::whereId($request->id)
            ->update($request->except(['_token']));

        return redirect()->route('admin.religion.index');
    }

    public function destroy($id)
    {
        Religion::whereId($id)->delete();

        return redirect()->back();
    }
}
