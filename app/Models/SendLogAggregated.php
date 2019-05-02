<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SendLogAggregated extends Model
{
    protected $fillable = [
        'date', 'cnt_id', 'usr_id', 'log_success'
    ];

    protected $dates = [
        'date'
    ];
}
