<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        Alert::success('Success', 'Kategori berhasil ditambahkan!');
        return redirect('kategori');
    }

    public function edit($id)
    {
        Category::find($id);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $category = Category::find($id);

        $category->update([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        Alert::success('Success', 'Kategori berhasil diubah!');
        return redirect('kategori');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }
}
