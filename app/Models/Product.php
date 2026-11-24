<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'image',
        'produk',
        'deskripsi',
        'status',
        'tokopedia_url',
        'harga',
        'kategori_id',
        'terlaris'
    ];

    public function category()
    {
        return $this->belongsTo(
            Category::class,
            'kategori_id',
            'id_kategori'
        );
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(Review::class);
    }
}
