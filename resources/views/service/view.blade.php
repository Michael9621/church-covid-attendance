<?php use Carbon\Carbon; ?>
@extends('layouts.adminLayout')

    @section('content')

        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-graph text-success">
                            </i>
                        </div>
                        <div>View age groups
                            <div class="page-title-subheading">Displays all the age groups
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="main-card mb-3 card">
                        <div class="card-header">View all services
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Status</th>
                                    <th class="text-center">View</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if($services->count()>0)
                                @foreach($services as $service)
                                <tr>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    @if($service->day==1)
                                                        <div class="widget-subheading opacity-7">Tuesday {{$service->date}}</div>
                                                    @elseif($service->day==2)
                                                        <div class="widget-subheading opacity-7">Thursday {{$service->date}}</div>
                                                    @elseif($service->day==3)
                                                        <div class="widget-subheading opacity-7">Sunday {{$service->date }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </td>

                                
                                    <td class="">
                                        @if($service->date > Carbon::now())
                                            <div class="badge badge-success">Pending</div>
                                        @else
                                            <div class="badge badge-warning">overdue</div>
                                        @endif
                                    </td>
                                

                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm"><a href="{{ route('service-show', ['id' => $service->id]) }}">View</a></button>
                                    </td>

                                    
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm"><a href="{{ route('service-edit', ['id' => $service->id]) }}">Edit<a></button>
                                    </td>

                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm"><a href="{{ route('service-destroy', ['id' => $service->id]) }}">Delete</a></button>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td> no services created </td>
                                </tr>
                                @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    @endsection