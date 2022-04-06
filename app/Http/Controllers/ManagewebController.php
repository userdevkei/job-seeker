<?php

namespace App\Http\Controllers;

use App\Manageweb;
use Illuminate\Http\Request;

class ManagewebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Manageweb::orderBy('created_at', 'DESC')->get();
        return view('manageweb.index')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('manageweb.create');
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
          'title' => 'required',
          'desc' => 'required',
          'image' => 'required|image|max:4000',
      ]);

        if ($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $manageweb = new Manageweb();
        $manageweb->title = $request->input('title');
        $manageweb->description = $request->input('desc');
        $manageweb->image = $fileNameToStore;
        $manageweb->save();

        return redirect('manager')->with('success', 'Home page slide updated.');
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
        $data = Manageweb::find($id);

        return view('manageweb.edit')->with('data', $data);
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
        $this->validate($request,[
            'title' => 'required',
            'desc' => 'required',
            'image' => 'required|image|max:4000',
        ]);

        if ($request->hasFile('image'))
        {
            $fileNameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            $path = $request->file('image')->storeAs('public/images', $fileNameToStore);

        }else
        {
            $fileNameToStore = 'noimage.jpg';
        }

        $manageweb = Manageweb::find($id);

        $manageweb->title = $request->input('title');
        $manageweb->description = $request->input('desc');
        $manageweb->image = $fileNameToStore;
        $manageweb->save();

        return redirect('manager')->with('success', 'Home page slider item updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Manageweb::find($id);

        $data->delete();

        return redirect('manager')->with('success', 'Selected slider item removed');
    }
}
