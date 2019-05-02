<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\SendLogAggregated;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        $logs = SendLogAggregated::query()
            ->when($from = $request->get('from'), function ($q) use ($from) {
                $q->whereDate('date', '>=', $from);
            })
            ->when($to = $request->get('to'), function ($q) use ($to) {
                $q->whereDate('date', '<=', $to);
            })
            ->when($country = $request->get('country_id'), function ($q) use ($country) {
                $q->where('cnt_id', $country);
            })
            ->when($user = $request->get('user_id'), function ($q) use ($user) {
                $q->where('usr_id', $user);
            })
            ->orderBy('date')
            ->get()
            ->groupBy(function ($date) {
                return Carbon::parse($date->date)->format('Y-m-d');
            });

        return view('welcome', [
            'countries' => Country::pluck('cnt_id'),
            'users' => User::pluck('usr_id'),
            'logs' => $logs
        ]);
    }
}
