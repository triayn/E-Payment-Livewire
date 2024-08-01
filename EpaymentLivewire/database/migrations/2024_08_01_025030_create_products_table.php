<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('kode_produk');
            $table->string('nama');
            $table->text('deskripsi');
            $table->integer('harga');
            $table->enum('kategori', ['basreng', 'makaroni', 'mie-lidi']);
            $table->integer('stok');
            $table->enum('ukuran', ['80 gram', '110 Gram', '220 Gram', '500 Gram', '1 kg']);
            $table->enum('varian', ['Original', 'Pedas-lv1', 'Pedas-lv2', 'Pedas-lv3', 'Balado', 'Sapi-panggang', 'Jangung-bakar']);
            $table->enum('status', ['tersedia', 'tidak tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
