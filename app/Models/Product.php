<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['image', 'name', 'slug', 'description', 'category_id', 'price', 'store_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
