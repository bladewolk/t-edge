<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $primaryKey = 'cnt_id';

    protected $fillable = [
        'cnt_code', 'cnt_title', 'cnt_created'
    ];

    protected $dates = [
        'cnt_created'
    ];

    public $timestamps = false;

    public function numbers()
    {
        return $this->hasMany(Number::class, 'cnt_id');
    }
}
