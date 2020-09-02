<?php use Carbon\Carbon; ?>
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
                                @if($service->date > Carbon::now())
                                    <div class="badge badge-success">Pending</div>
                                @else
                                    <div class="badge badge-warning">overdue</div>
                                @endif
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
                                    <div class="widget-subheading">age groups</div>
                                </div>
                                <div class="widget-content-right">
                                    <div class="widget-numbers text-danger">{{$count_ages}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>          

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Registered
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
                                @if($members2)
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
                                    <th class="text-center">{{ $member->gender ==0 ? "M" : "F"}}
                                    </th>
                                </tr>
                                @endforeach

                                @else
                                    <tr>
                                        <td>no members have registered for this service</td>
                                    </tr>

                                @endif
            
                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                            <button class="btn-wide btn btn-success"><a href="{{route('service-excel', ['id'=>$service->id])}}">convert execel</a></button>
                            {{ $members2->links() }}
                        </div>
                    </div>
                </div>
            </div>

           


        </div>


    @endsection