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
}