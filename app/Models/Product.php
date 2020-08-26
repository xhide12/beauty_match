<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'brand', 'product_name', 'category', 'size', 'manufacture', 'image1', 'image2', 'image3', 'image4', 'product_coment', 'composition','official_hp','official_instagram',
    ];
}
