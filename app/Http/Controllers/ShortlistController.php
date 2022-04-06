<?php

namespace App\Http\Controllers;

use App\Application;
use App\User;
use Auth;
use Illuminate\Http\Request;
use App\Shortlist;
use Twilio\Rest\Client;
use Validator;
class ShortlistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shortlist = Shortlist::where('user_id', Auth::user()->id)->latest()->paginate(7);

        return view('shortlist.shortlist')->with('shortlists', $shortlist);
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
        //
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
        $user = User::find($id);
        $user->delete();
        return redirect('users')->with('success', 'The user was successfully removed');
    }
    public function disapprove($id)
    {
        $shortlist = Shortlist::find($id);
        Application::create($shortlist->toArray());
        $shortlist->delete();

        return redirect('applications')->with('success', 'One Job Applicant Was Removed From Shortlist');
    }

    public function status(Request $request)
    {
        $userId = $request->input('user_id');
        $status = $request->input('status');

        $result = 0;
        if ($status==0) {
            Shortlist::where('id', $userId)->update(['is_deleted' => 1]);
            $result = 1;
        } else {
            Shortlist::where('id', $userId)->update(['is_deleted' => 0]);
            $result = 0;
        }

        return $result;
    }

    public function send(Request $request)
    {
       # $text = Shortlist::find($id);
       # $text->name = $name;
        #$text->job_name = $job_name;
        #         $text->contract = $contract;
        #        $text->location = $location;
        #        $text->work_hours = $hours;
        #        $text->duties = $duties;
        #        $text->salary = $salary;

        if(request()->isMethod("post")){

            $to = '254729434393';
            $from = getenv("TWILIO_FROM");
            $message = 'Try Twilio';

            $ch = curl_init();

            //set the url, number of POST vars, POST data
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_USERPWD, getenv("TWILIO_SID").':'.getenv("TWILIO_TOKEN"));
            curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
            curl_setopt($ch, CURLOPT_URL, sprintf('https://api.twilio.com/2010-04-01/Accounts/'.getenv("TWILIO_SID").'/Messages.json', getenv("TWILIO_SID")));
            curl_setopt($ch, CURLOPT_POST, 3);
            curl_setopt($ch, CURLOPT_POSTFIELDS, 'To='.$to.'&From='.$from.'&Body='.$message);

            // execute post
            $result = curl_exec($ch);
            $result = json_decode($result);

            // close connection
            curl_close($ch);
            //Sending message ends here

            return [$result];

        }
        return redirect('shortlist')->with('success', 'Message sent to applicant');
    }
}
