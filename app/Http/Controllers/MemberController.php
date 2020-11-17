<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use App\Age;
use App\Member;
use Session;
use Carbon\Carbon;

class MemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('info');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('home1')->with('services', Service::all())->with('ages', Age::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $member=Member::where('identification',$request->id)->where('service_id',$request->service_id)->first();
        if($member){
            Session::flash('warning', 'the details you submitted already exist');
            return redirect()->back();
        }
        else{
            $member= Member::create([
                "name" => $request->name,
                "identification" => $request->id,
                "phone" => $request->phone,
                "age"=>$request->age,
                "gender"=>$request->gender,
                "service_id" => $request->service_id
            ]);

            Session::flash('success', 'you have registered successfully');

            return redirect()->route('registered');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
