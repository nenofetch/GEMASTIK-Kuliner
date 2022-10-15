<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $table = 'categories';
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['name', 'slug'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
