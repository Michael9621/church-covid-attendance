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
                        <div>Edit a service
                            <div class="page-title-subheading">Fill the form appropriately
                            </div>
                        </div>
                    </div>
                    </div>
            </div>
            
            <div class="tab-content">
                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="main-card mb-3 card">
                        <div class="card-body"><h5 class="card-title"></h5>
                            <form method="POST"  action="{{route('service-update', ['id'=>$service->id])}}" class="">
                                
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Duration</label><input name="duration" id="exampleAddress" placeholder="Duration of the service" type="text" class="form-control" value="{{$service->duration}}"></div>
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Number of attendants allowed</label><input name="attendants" id="exampleAddress" placeholder="Maximum number of attendants" type="text" class="form-control" value="{{$service->attendants}}"></div>                                 
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Choose day</label><select id="exampleSelect" class="form-control" name="day">
                                        <option></option>
                                        <option value="1">Tuesday</option>
                                        <option value="2">Thursday</option>
                                        <option value="3">Sunday</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Type of service</label><select name="service" id="exampleSelect" class="form-control">
                                        <option></option>
                                        <option value="1">1st service</option>
                                        <option value="2">2nd service</option>
                                    </select>
                                </div>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" name="date"  value="{{$service->date}}"/>
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                
                                <button class="mt-2 btn btn-success text-center">update a service</button>
                            @csrf
                            </form>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>


    @endsection