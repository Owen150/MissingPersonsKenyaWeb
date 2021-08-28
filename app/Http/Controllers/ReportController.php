<?php

namespace App\Http\Controllers;

use App\Models\cr;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    //Only authenticated users can post-error kidogo
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     */
    public function index()
    {
        $crs = Cr::all();
        return view('welcome')->with('crs', $crs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.report');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name_of_missing_person' => 'required',
            'phone_number' => 'required',
            'your_name' => 'required',
            'email' => 'required',
            'age'=>'required',
            'additional_info'=>'required',
            'image_url'=>['required','image'],
        ]);

        $report = new cr();

        $report->name_of_missing_person = $request->name_of_missing_person;
        $report->phone_number = $request->phone_number;
        $report->your_name = $request->your_name;
        $report->email = $request->email;
        $report->age = $request->age;
        $report->additional_info = $request->additional_info;
        $report->image_url = $request->image_url->store('uploads','public');

        $report->save();

        $crs = Cr::all();

        //returns authenticated user back to his/her user profile
        return redirect('/missing')->with('crs', $crs);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function show(cr $cr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function edit(cr $cr)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cr $cr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cr  $cr
     * @return \Illuminate\Http\Response
     */
    public function destroy(cr $cr)
    {
        //
    }
}
