<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    protected $fillable = [
        'brand', 'product_name', 'category', 'size', 'manufacture_id', 'image1', 'image2', 'image3', 'image4', 'product_coment', 'composition','official_hp','official_instagram',
    ];

    public function manufacture()
    {
        return $this->belongsTo('App\Models\Manufacture','manufacture_id', 'id');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function introductions()
    {
        return $this->hasMany('App\Models\Introduction');
    }

}
