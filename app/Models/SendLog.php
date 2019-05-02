<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SendLog extends Model
{
    use SoftDeletes;

    public $timestamps = false;
    protected $primaryKey = 'log_id';
    protected $table = 'send_log';

    protected $fillable = [
        'usr_id', 'num_id', 'log_message', 'log_success', 'log_created'
    ];

    protected $guarded = [
        'log_id'
    ];

    protected $dates = [
        'log_created'
    ];

    public function number()
    {
        return $this->belongsTo(Number::class, 'num_id');
    }
}