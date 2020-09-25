<?php

namespace App\Http\Controllers;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function activity($hal, $activity, $debug = null)
    {
        $time = Carbon::now();
        $job = new Activity;
        $job->hal = $hal;
        $job->activity = $activity.' pada '.$time;
        $job->debug = $debug;
        $job->save();
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
