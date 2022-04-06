<?php

namespace App\Http\Controllers;
use App\User;
use App\Job;
use Auth;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Carbon;

class JobsController extends Controller
{
    use SoftDeletes;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $jobs = Job::where('user_id', Auth::user()->id)->latest()->paginate(7);

        return view('jobs.index')->with('jobs', $jobs );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'vacancy' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'contract' => 'required',
            'location' => 'required',
            'hours' => 'required',
            'deadline' => 'required',
            'duties' => 'required',
            'salary' => 'required',
        ]);

        $job = new Job;
        $job->job_name = $request->input('name');
        $job->vacancies = $request->input('vacancy');
        $job->age = $request->input('age');
        $job->gender = $request->input('gender');
        $job->contract = $request->input('contract');
        $job->location = $request->input('location');
        $job->work_hours = $request->input('hours');
        $job->app_deadline = $request->input('deadline');
        $job->duties = $request->input('duties');
        $job->salary = $request->input('salary');
        $job->user_id = auth()->id();
        $job->by = auth()->user()->name;
        $job->u_status = auth()->user()->status;
        $job->save();

        return redirect('jobs')->with('success', 'One Job Record Was Successfully Added');
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
        return view('jobs.status')->with('jobs',$job);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::find($id);
        return view('jobs.edit')->with('jobs', $job);
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
        $this->validate($request, [
            'name' => 'required',
            'vacancy' => 'required',
            'age' => 'required',
            'gender' => 'required',
            'contract' => 'required',
            'location' => 'required',
            'hours' => 'required',
            'deadline' => 'required',
            'duties' => 'required',
            'salary' => 'required',
        ]);

        $job = Job::find($id);
        $job->job_name = $request->input('name');
        $job->vacancies = $request->input('vacancy');
        $job->age = $request->input('age');
        $job->gender = $request->input('gender');
        $job->contract = $request->input('contract');
        $job->location = $request->input('location');
        $job->work_hours = $request->input('hours');
        $job->app_deadline = $request->input('deadline');
        $job->duties = $request->input('duties');
        $job->salary = $request->input('salary');
        $job->user_id = auth()->id();
        $job->by = auth()->user()->name;
        $job->u_status = auth()->user()->status;
        $job->save();


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

        return redirect('jobs')->with('success', '1 Job Was successfully updated');
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

        return redirect('jobs')->with('success', '1 Job Was successfully Removed');
    }
    public function jobStatus(Request $request, $id)
    {
        $this->validate($request,[
            'status' => 'required|in:0,1',
        ]);
        $status = Job::find($id);
        $status -> status = $request->input('status');
        $status->save();

        return redirect('jobs')->with('success', 'Job status updated successfully');
    }
}
