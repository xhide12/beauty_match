<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Chat
 * @package App\Models
 *
 * @property string $text
 */
class Chat extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_chat', 'manufacture_chat', 'text', 'introduction_id'
    ];

    public function manufacture()
    {
        return $this->belongsTo('App\Models\Manufacture');
    }

    
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }


}