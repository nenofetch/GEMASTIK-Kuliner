<?php

namespace App\Http\Controllers;

use App\Models\CategoryProduct;
use Illuminate\Http\Request;

class CategoryProductController extends Controller
{
    public function index()
    {
        //
    }

    public function store(Request $request)
    {

        $validate = $request->validate([
            'category_product_name' => 'required'
        ]);

        CategoryProduct::create([
            $validate
        ]);

        return redirect()->with('msg', 'Kategori Sukses Ditambahkan');
    }

    public function edit($id)
    {
        CategoryProduct::find($id);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'category_product_name' => 'required'
        ]);

        $category = CategoryProduct::find($id);

        $category->update([
            'category_name_product' => $request->category_name_product
        ]);
    }

    public function destroy($id)
    {
        $category = CategoryProduct::find($id);

        $category->destroy();
    }
}
