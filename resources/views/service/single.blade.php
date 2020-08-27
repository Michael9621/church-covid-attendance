@extends('layouts.adminLayout')

    @section('content')

        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                        </div>
                        <div>
                        @if($service->day ==1)
                         Tuesday
                        @elseif($service->day ==2)
                        Thursday
                        @elseif($service->day ==3)
                        Sunday
                        @endif
                            <div class="page-title-subheading">{{ $service->date }}
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                    </div>    
                </div>
            </div> 

             
            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total members</div>
                                    <div class="widget-subheading">All services ever recorded</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-success">{{$members}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Gender ratio</div>
                                    <div class="widget-subheading">Ratio of Male:Female</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-warning">{{$male}} : {{$female}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content">
                        <div class="widget-content-outer">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="widget-heading">Total Age groups</div>
                                    <div class="widget-subheading">People Interested</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-danger">4</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          

            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="card-shadow-danger mb-3 widget-chart widget-chart2 text-left card">
                        <div class="widget-content">
                            <div class="widget-content-outer">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left pr-2 fsize-1">
                                        <div class="widget-numbers mt-0 fsize-3 text-danger">71%</div>
                                    </div>
                                    <div class="widget-content-right w-100">
                                        <div class="progress-bar-xs progress">
                                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="81" aria-valuemin="0" aria-valuemax="100" style="width: 81%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left fsize-1">
                                    <div class="text-muted opacity-6">Current service attendance</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
     
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Active Users
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">ID</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Age</th>
                                    <th class="text-center">Gender</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($members2 as $member)
                                <tr>
                                    
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-subheading opacity-7">{{$member->name}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">{{$member->identification}}</td>
                                    <td class="text-center">{{$member->phone}}</td>
                                    <td class="text-center">{{$member->age}}</td>
                                    <th class="text-center">{{ $member->gender ==0 ? "M" : "F"}}</th>
                                </tr>
                                @endforeach
            
                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                            <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                            <button class="btn-wide btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    @endsection