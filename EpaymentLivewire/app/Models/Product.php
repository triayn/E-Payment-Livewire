<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_product',
        'nama',
        'deskripsi',
        'harga',
        'stok',
        'kategori',
        'ukuran',
        'bahan',
        'panjang_kain',
        'lebar_kain',
        'jenis_batik',
        'jenis_lengan',
        'status',
    ];
}
