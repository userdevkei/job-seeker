<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use App\Shortlist;
use App\Application;
use App\User;
use Auth;
use Illuminate\Support\Facades\App;

class ApplicationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create', 'show', 'store']);
        $this->middleware('Employer')->except(['create', 'show', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $application = Application::where('user_id', Auth::user()->id)->latest()->paginate(7);

        return view('applications.index')->with('apps', $application);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $job_name = job()->job_name;
        $job = Job::find($job_name);
        return view('applications.create')->with('job', $job->name );
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'contact' => 'required','regex:/(0)[0-9]{9}/','min:10','max:10',
            'id' => 'required',
            'availability' => 'required',
            'experience' => 'required',
            'job' => 'required'
        ]);

        $application = new Application;
        $application->name = $request->input('name');
        $application->gender = $request->input('gender');
        $application->age = $request->input('age');
        $application->id_no = $request->input('id');
        $application->availability = $request->input('availability');
        $application->experience = $request->input('experience');
        $application->contact = preg_replace('/0/', '+254', $request->input('contact'), 1);
        $application->location = $request->input('location');
        $application->job_applied = $request->input('job');
        $application->contract = $request->input('contract');
        $application->located = $request->input('job_location');
        $application->hours = $request->input('work_hours');
        $application->duties = $request->input('duties');
        $application->salary = $request->input('salary');
        $application->user_id = $request->input('user_id');
        $application ->save();

        return redirect('/')->with('success', 'You Applied For a Vacancy Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job =  Job::find($id);

        return view('applications.selected')->with('job', $job);
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
        $application = Application::find($id);
        $application->delete();
        return redirect('applications')->with('success', 'one applicant removed from applicants list');
    }

    public function approve($id)
    {
           $application = Application::find($id);
           Shortlist::create($application->toArray());
           $application->delete();

       return redirect('shortlist')->with('success', 'One Job Applicant Was Successfully Approved');
    }
}
