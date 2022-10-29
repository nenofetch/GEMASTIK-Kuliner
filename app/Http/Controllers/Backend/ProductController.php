<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class ProductController extends Controller
{
    use AuthenticatesUsers;
    use HasRoles;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->hasRole('Administrator')) {
            $data = [
                'products' => Product::all(),
            ];
        } else {
            $data = [
                'products' => Product::join('toko', 'toko.id', '=', 'products.toko_id')->where('user_id', Auth::user()->id)->get(),
            ];
        }
        return view('admin.product.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->hasRole('Administrator')) {
            $data = [
                'categories' => Category::all(),
                'toko' => Toko::all(),
            ];
        } else {
            $id = Auth::user()->id;
            $data = [
                'categories' => Category::all(),
                'toko' => DB::table('toko')->where('user_id', $id)->get()
            ];
        }

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
        if (Auth::user()->hasRole('Administrator')) {
            $categories = Category::all();
            $toko = Toko::all();
        } else {
            $iduser = Auth::user()->id;
            $categories = Category::all();
            $toko = DB::table('toko')->where('user_id', $iduser)->get();
        }

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

        if ($request->hasFile('image') != '') {
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
