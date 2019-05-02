<?php

namespace App\Observers;

use App\Models\SendLog;
use App\Models\SendLogAggregated;

class SendLogObserver
{
    /**
     * Handle the User "created" event.
     *
     * @param SendLog $log
     * @return void
     * @throws \Exception
     */
    public function created(SendLog $log)
    {
        $log->load('number.country');
        SendLogAggregated::create([
            'date' => $log->log_created,
            'cnt_id' => $log->number->country->cnt_id,
            'usr_id' => $log->usr_id,
            'log_success' => $log->log_success
        ]);
        $log->delete();
    }
}
