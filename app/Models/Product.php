<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'products';
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['image', 'name', 'slug', 'description', 'category_id', 'price', 'toko_id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function toko()
    {
        return $this->belongsTo(Toko::class);
    }
}
