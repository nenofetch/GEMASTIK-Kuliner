<?php

namespace Database\Seeders;

use App\Models\Toko;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Toko::create([
            'nama' => 'Toko 1',
            'pemilik' => 'Pemilik 1',
            'deskripsi' => 'Toko 1',
            'alamat' => 'Kuningan',
            'logo' => 'logo.jpg',
            'foto' => 'foto.jpg',
            'dokumen' => 'dokumen.pdf',
            'latitude' => '-6.987815374206',
            'longtitude' => '108.47213745117',
            'status' => 'pending',
            'user_id' => '2',
        ]);
    }
}
