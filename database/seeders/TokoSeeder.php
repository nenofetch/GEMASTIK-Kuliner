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
            'status' => 'pending',
            'id_user' => '1',
        ]);
    }
}
