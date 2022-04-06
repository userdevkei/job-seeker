<?php

namespace App\Http\Controllers;

use App\Job;
use App\Message;
use App\User;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Pagination;

class SystemController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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

        $job = Job::where('status', '0') ->where('u_status', 1)->where('expiry', 1)->orderBy('updated_at', 'desc')->paginate(9);
        return view('pages.jobs')->with('jobs', $job);
    }

    public function __construct(){

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::find($id);
        return view('applications.create')->with('jobs', $job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::find($id)->delete();

        return redirect('job')->with('success', '1 Job Was successfully Removed');
    }
}
