<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Class NovaSetting
 * @package App\Models
 */
class NovaSetting extends Model
{
    public $fillable = [
       'settings',
        'lang',
        'title'
    ];

    protected $casts = [
        'settings' => 'json'
    ];
}
