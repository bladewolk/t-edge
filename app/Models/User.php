<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = [
        'usr_name', 'usr_created'
    ];

    protected $dates = [
        'usr_created'
    ];
    public $timestamps = false;
}
