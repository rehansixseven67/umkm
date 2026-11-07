<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'image',
        'produk',
        'deskripsi',
        'status',
        'harga',
        'kategori_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id',
        'id_kategori');
    }
}
