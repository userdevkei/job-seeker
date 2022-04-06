<?php

namespace App\Http\Controllers;

use App\Helper\Helper;
use Illuminate\Http\Request;
use Mapper;
use App\Message;
class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('Admin')->except(['create', 'store']);
        $this->middleware('auth')->except(['create', 'store']);

        $text = Helper::messCount();

    }

    public function index()
    {
        $text = Helper::messCount();
        $message = Message::orderBy('created_at', 'DESC')->paginate(7);
        return view('messages.index')->with(['messages'=> $message, 'text' => $text]);
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
        $this->validate($request, [
           'name' => 'required',
            'email' =>'',
            'message' => 'required',
        ]);

        $mess = new Message;
        $mess->name = $request->input('name');
        $mess->email= $request->input('email');
        $mess->message = $request->input('message');
        $mess->subject = $request->input('subject');
        $mess->save();

        return redirect('/')->with('success', 'message sent');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::orderBy('created_at', 'DESC')->paginate(7);
        $mess = Message::find($id);

            $mess -> status = 1;
            $mess ->save();

        return view('messages.show')->with(['success' => 'Message read', 'messages' => $message, 'text' => $mess]);
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
        //
    }
}
