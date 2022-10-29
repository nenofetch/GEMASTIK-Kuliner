<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Toko;
use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        if (Auth::user()->hasRole('Administrator')) {
            $data = [
                'toko' => Toko::all()->count(),
                'product' => Product::all()->count(),
                'category' => Category::all()->count(),
                'users' => User::all()->count(),
                'maps' => Toko::all(),
            ];
        } else {
            $iduser = Auth::user()->id;
            $data = [
                'toko' => Toko::where('user_id', $iduser)->count(),
                'product' => Product::join('toko', 'toko.id', '=', 'products.toko_id')->where('user_id', $iduser)->count(),
            ];
        }

        return view('admin.dashboard', $data);
    }
}
