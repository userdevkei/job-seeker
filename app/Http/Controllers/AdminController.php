<?php

namespace App\Http\Controllers;

use App\Message;
use Illuminate\Http\Request;
use App\User;
use App\Application;
use App\Job;
use Illuminate\Pagination;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('Admin')->except('jobStatus');
    }

    public function users()
    {
        $mess = Message::count();
        $user = User::orderby('created_at', 'DESC')->paginate(9);
        return view('admin.users')->with(['users'=> $user, 'mess' => $mess]);
    }
    public function Status(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();

    }
    public function jobs()
    {
        $job = Job::orderBy('updated_at', 'DESC')->paginate(9);
        return view('admin.jobs')->with(['jobs' => $job]);
    }
    public function application()
    {
        $app = Application::all();
        return view('admin.application')->with(['apps' => $app]);
    }

    public function jobStatus(Request $request, $id)
    {
        $status = Job::find($id);
        $status -> status = $request->input('status');
        $status->save();

        return redirect('jobs')->with('success', 'Job status updated successfully');
    }
    public function userStatus(Request $request, $id)
    {
        $status = User::find($id);
        $status -> status = $request->input('status');
        $status->save();

        return redirect('users')->with('success', 'User subscription status updated successfully');
    }

    public function destroy($id)
    {

    }
}
