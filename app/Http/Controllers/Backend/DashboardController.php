<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = [
            'toko' => Toko::all()->count(),
            'product' => Product::all()->count(),
            'category' => Category::all()->count(),
            'users' => User::all()->count(),
        ];

        return view('admin.dashboard', $data);
    }
}
