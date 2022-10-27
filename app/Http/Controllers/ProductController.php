<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $data = [
            'produk' => Product::with('toko')->orderBy('id', 'desc')->get()
        ];
        return view('frontend.user.listProduk', $data);
    }

    public function detail($id)
    {
        $data = [
            'produk' => Product::find($id)
        ];

        return view('frontend.user.produk', $data);
    }
}
