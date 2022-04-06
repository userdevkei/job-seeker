<?php

namespace App\Http\Controllers;

use App\Job;
use App\Manageweb;
use Illuminate\Console\Scheduling\Schedule;
use Mapper;
use Illuminate\Pagination;
use Illuminate\Http\Request;
use Carbon;

class MainController extends Controller
{
    protected function update(Schedule $schedule)
    {
        $schedule->call(function ()
        {
            Job::where('app_deadline', '<', \Carbon\Carbon::now()->format('Y-m-d'))->delete();})->everyMinute();
    }


    public function index()
    {
        $now = \Carbon\Carbon::now()->format('Y-m-d');
        $exp_date = Job::all();

        foreach ($exp_date as $exp){
            $date_exp = new \Carbon\Carbon($exp->app_deadline);

            if ($date_exp < $now )
            {
                $exp->expiry = 0;
                $exp->save();
            }

            if ($now < $date_exp)
            {
                $exp->expiry = 1;
                $exp->save();
            }
        }

        $job = Job::where('status', '0')->where('u_status', 1)->where('expiry', 1)->orderBy('updated_at', 'desc')->paginate(9);
        return view('welcome')->with(['jobs' => $job, 'now' => $now]);
    }

    public function help()
    {
        return view('pages.about');
    }

}
