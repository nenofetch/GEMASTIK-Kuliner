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
    protected $fillable = ['nama', 'pemilik', 'kategori_produk', 'deskripsi', 'alamat', 'logo', 'foto', 'dokumen'];

    public function Categories()
    {
        return $this->belongsTo(Category::class);
    }
}
