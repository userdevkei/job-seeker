<?php

namespace App\Http\Controllers;
use App\Application;
use App\User;
use Auth;
use App\Job;
use App\Shortlist;
use App\Message;
use Charts;
use DB;
use Illuminate\Database\Eloquent\Collection;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Helper\Helper;

class DashboardController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('Admin')->only('admin');
        $this->middleware('Employer')->only('employer');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function admin(){
        $text = Helper::messCount();
        $mess = Message::count();
        $user = User::count();
        $jobs = Job::count();
        $apps = Application::count();
        return view('admin.dashboard')->with(['text' => $text, 'mess' => $mess, 'job' => $jobs, 'user' =>  $user, 'apps' => $apps]);
    }

    public function employer(){
        $apps = Application::where('user_id', Auth::user()->id)->count();
        $job = Job::where('user_id', Auth::user()->id)->count();
        $short = Shortlist::where('user_id', Auth::user()->id)->count();
        $t_jobs = Job::count();
        $percentage = $job / $t_jobs * 100;
            if($job == 0 ){
                $per_app = 0;
            }else {
                $per_app = $apps / $job * 100;
            }
        $shorts = Shortlist::where('user_id', Auth::user()->id) ->where('t_status', 1)->count();
            if ($shorts == 0){
                $list = 0;
            }else{
                $list =  $shorts/$short * 100;
            }
        return view('employer.dashboard')->with(['apps'=>$apps,'job'=>$job,'short'=>$short, 'jobs'=>$percentage, 'japps' => $per_app, 'list' => $list]);
    }
}
