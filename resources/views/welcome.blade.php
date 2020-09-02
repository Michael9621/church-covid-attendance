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
                        <div>Analytics Dashboard
                            <div class="page-title-subheading">Synopsis
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions">
                       
                    </div>    
                </div>
            </div> 

            <div class="row">
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Services</div>
                                <div class="widget-subheading">count of all services attended</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$services_count}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-arielle-smile">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Members</div>
                                <div class="widget-subheading">total members</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$members_count}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-4">
                    <div class="card mb-3 widget-content bg-grow-early">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Gender ratio</div>
                                <div class="widget-subheading"> Ratio of men to women</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{$male_count}} : {{$female_count}}</span></div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">Services
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Max attenance</th>
                                    <th class="text-center">Status</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($services->count() >0)
                                @foreach($services as $service)
                                    <tr>
                                        <td>
                                            <div class="widget-content p-0">
                                                <div class="widget-content-wrapper">
                                                    <div class="widget-content-left flex2">
                                                        <div class="widget-heading">
                                                            @if($service->day == 1)
                                                            Tuesday
                                                            @elseif($service->day ==2)
                                                            Thursday
                                                            @elseif($service->day == 3)
                                                            Sunday
                                                            @endif
                                                        </div>
                                                        <div class="widget-subheading opacity-7">
                                                            {{$service->date}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center">{{$service->attendants}}</td>
                                        <td class="text-center">
                                            @if($service->date > Carbon::now())
                                                <div class="badge badge-success">Pending</div>
                                            @else
                                                <div class="badge badge-warning">overdue</div>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a href="{{ route('service-show', ['id'=>$service->id]) }}">view</a></button>
                                        </td>
                                    </tr>
                                @endforeach

                                 @else
                                <tr class="text-center">
                                    <td>no services created</td>
                                </tr>
                                @endif
                                
                                </tbody>
                            </table>
                        </div>
                        <div class="d-block text-center card-footer">
                            
                        </div>

                    </div>
                </div>
            </div>

        </div>


    @endsection