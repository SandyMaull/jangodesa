<?php

namespace App\Http\Controllers;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function activity($hal, $activity, $bagian = null, $debug = null)
    {
        $time = Carbon::now();
        $job = new Activity;
        $job->hal = $hal;
        $job->activity = $activity.' pada '.$time;
        if ($bagian) {
            $Rolebagian = Auth::user()->role;
            $job->bagian = $Rolebagian;
        }
        $job->debug = $debug;
        $job->save();
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
