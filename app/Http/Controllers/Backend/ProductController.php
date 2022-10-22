<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'products' => Product::all()
        ];
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'categories' => Category::all(),
            'toko' => Toko::all(),
        ];
        return view('admin.product.add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|mimes:jpg,png,jpeg|image|max:2048',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'toko_id' => 'required',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('uploads/products');
        } else {
            $path = '';
        }

        Product::create([
            'image' => $path,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'toko_id' => $request->toko_id,
        ]);

        Alert::success('Success', 'Data berhasil ditambahkan!');
        return redirect('produk');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);

        return view('admin.product.detail', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $toko = Toko::all();

        return view('admin.product.edit', compact('product', 'categories', 'toko'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'mimes:jpg,png,jpeg|image|max:2048',
            'name' => 'required',
            'description' => 'required',
            'category_id' => 'required',
            'price' => 'required',
            'toko_id' => 'required',
        ]);

        $product = Product::find($id);

        if ($request->hasFile('image')) {
            Storage::delete($product->image);
            $path = $request->file('image')->store('uploads/products');
        } else {
            $path = '';
        }

        $product->update([
            'image' => $path,
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-'),
            'description' => $request->description,
            'category_id' => $request->category_id,
            'price' => $request->price,
            'toko_id' => $request->toko_id,
        ]);

        Alert::success('Success', 'Data berhasil diubah!');
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product->image) {
            Storage::delete($product->image);
        }

        $product->delete();
        return response()->json(['status' => 'Data berhasil dihapus!']);
    }

    public function storeCategory(Request $request)
    {
        $categories = Category::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name, '-')
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data Berhasil Ditambahkan!',
            'data' => $categories
        ]);
    }
}
