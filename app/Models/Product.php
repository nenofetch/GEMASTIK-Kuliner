<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $table = 'product';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['image', 'nama', 'slug', 'description', 'category_id', 'price', 'store_id'];

    public function Categories()
    {
        return $this->belongsTo(Category::class);
    }

    public function Stores()
    {
        return $this->belongsTo(Toko::class);
    }
}
