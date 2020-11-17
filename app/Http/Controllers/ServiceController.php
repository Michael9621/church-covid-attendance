<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Service;
use App\Age;
use Session;
use App\Exports\ServicesExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Type;


class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('service.view')->with('services', Service::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $type=Type::all()->first();
        return view('service.create')->with('type',$type);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::create([
            "duration" => $request->duration,
            "attendants" => $request->attendants,
            "day" => $request->day,
            "service" => $request->service,
            "date" => Carbon::parse($request->date)
        ]);

        Session::flash('success', 'service created successfully');

        return redirect()->route('service-view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $service=Service::find($id);
        $members=$service->members()->count();
        $female=$service->members()->where('gender',1)->count();
        $male=$service->members()->where('gender',0)->count();
        $count_ages= Age::all()->count();
        //$members3=$service->members()->selectRaw('identification, COUNT(*) as count')->groupBy('identification')->orderBy('count', 'desc')->get();
        
        $members2=$service->members()->paginate(10);
        return view('service.single')->with('service', $service)
        ->with('members', $members)
        ->with('members2', $members2)
        ->with('female',$female)
        ->with('male',$male)
        ->with('count_ages',$count_ages)
        ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service=Service::find($id);
        return view('service.edit')->with('service',$service);
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

        
        $service=Service::find($id);
        $service->duration = $request->duration;
        $service->attendants = $request->attendants;
        $service->day = $request->day;
        $service->service=$request->service;
        $service->date=$service->date;
        $service->save();

        Session::flash('success', 'updated a service successfully');

        return redirect()->route('service-view');
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

    public function export($id){

        $service=Service::find($id);
        

        return Excel::download(new ServicesExport($id), 'sevice'. $service->date.'.xlsx');
        
    }
}
