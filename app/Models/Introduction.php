<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 * @package App\Models
 *
 * @property string $text
 */
class Introduction extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'manufacture_id', 'product_id', 'application_time', 'judgement'
    ];

    public function manufacture()
    {
        return $this->belongsTo('App\Models\Manufacture');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function product()
    {
        return $this->hasMany('App\Models\Product');
    }
    
}