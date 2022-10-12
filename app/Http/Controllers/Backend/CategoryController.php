<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'name' => 'required',
            'slug' => strtolower('name')
        ]);

        Category::create([
            $validate
        ]);

        return redirect()->with('msg', 'Kategori Sukses Ditambahkan');
    }

    public function edit($id)
    {
        Category::find($id);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'name' => 'required',
            'slug' => strtolower('name')
        ]);

        $category = Category::find($id);

        $category->update([
            $validate
        ]);
    }

    public function destroy($id)
    {
        $category = Category::find($id);

        $category->destroy();
    }
}
