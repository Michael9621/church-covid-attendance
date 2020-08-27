<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Age;
use Session;

class AgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('age.view')->with('ages', Age::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('age.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $age = Age::create ([
            
            "age" => $request->age

        ]);

        Session::flash('success', 'age group created successfully');

        return redirect()->route('age-view');
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
        $age=Age::find($id);
        return view('age.edit')->with('age', $age);
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
        $age=Age::find($id);
        $age->age = $request->age;
        $age->save();

        Session::flash('success', 'age group updated successfully');

        return redirect()->route('age-view');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $age = Age::find($id);
        $age->delete();
        Session::flash('success', 'age group deleted successfully');

        return redirect()->route('age-view');
    }
}
