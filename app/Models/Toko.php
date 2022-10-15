<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'toko';
    protected $primaryKey = 'id';
    public $timestamps = true;
    protected $fillable = ['nama', 'pemilik', 'deskripsi', 'alamat', 'logo', 'foto', 'dokumen'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
