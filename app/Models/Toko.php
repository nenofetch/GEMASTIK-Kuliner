<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    use HasFactory;

    protected $table = 'toko';
    protected $guarded = 'id';
    protected $primaryKey = 'id';
    public $timestamps = true;
    public $fillable = ['nama', 'pemilik', 'deskripsi', 'alamat', 'logo', 'foto', 'dokumen', 'status', 'id_user'];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
