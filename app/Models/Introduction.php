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
        return $this->belongsTo('App\Models\Manufacture', 'manufacture_id', 'id');
    }
    
    public function user()
    {
        return $this->belongsTo('App\Models\User' , 'user_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('App\Models\Product', 'product_id', 'id');
    }
    
}