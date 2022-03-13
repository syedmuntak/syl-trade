<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.category.index')
            ->with(['cat' => Category::all()]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required | string |unique:categories',
            'slug' => 'required | string',
        ]);
        $icon = 'icon.png';

        if ($request->hasFile('icon')) {
            $extension = $request->icon->extension();
            $icon = time() . '.' . $extension;
            $request->icon->move(public_path('uploads/category/icon'), $icon);
        }

        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'icon' => $icon
        ]);

        return redirect()->route('admin.category.index');
    }

    public function edit($id, $slug)
    {
        $cat = Category::whereId($id)
            ->whereSlug($slug)
            ->firstOrFail();

        return view('admin.category.edit', compact('cat'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required | string',
            'slug' => 'required | string',
        ]);

        $category = Category::whereId($request->id)
            ->firstOrFail();

        $icon = $category->icon;

        if ($request->hasFile('icon')) {

            $path = public_path('uploads/category/icon/' . $category->icon);

            if (file_exists($path)) {
                unlink($path);
            }

            $extension = $request->icon->extension();
            $icon = time() . '.' . $extension;
            $request->icon->move(public_path('uploads/category/icon'), $icon);
        }

        $category->update([
            'name' => $request->name,
            'slug' => $request->slug,
            'icon' => $icon
        ]);



        return redirect()->route('admin.category.index');
    }

    public function destroy($id)
    {
        $category = Category::whereId($id)->first();

        $path = public_path('uploads/category/icon/' . $category->icon);

        if (file_exists($path)) {
            unlink($path);
        }

        $category->delete();

        return redirect()->back();
    }
}
