<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    protected $primaryKey = 'num_id';

    protected $fillable = [
        'cnt_id', 'num_number', 'num_created'
    ];

    protected $dates = [
        'num_created'
    ];

    public $timestamps = false;

    public function country()
    {
        return $this->belongsTo(Country::class, 'cnt_id');
    }
}
