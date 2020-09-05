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
        'user_chat', 'manufacture_chat', 'text'
    ];
}