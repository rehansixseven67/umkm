<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
     protected $primaryKey ='id_kategori';
    protected $fillable = [ 'id_kategori',
        'kategori',
        'deskripsi',
        'image',
    ];

    public function borrows()
    {
        return $this->hasMany(Product::class, 'kategori_id', 'id_kategori');
    }
}
