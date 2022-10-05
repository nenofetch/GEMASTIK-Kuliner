<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('nama')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('kategori_produk')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('alamat')->nullable();
            $table->string('logo')->nullable();
            $table->string('foto')->nullable();
            $table->string('dokumen')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko');
    }
};
