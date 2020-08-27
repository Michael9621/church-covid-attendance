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
                        <div>Create a service
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
                            <form class="">
                                
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Duration</label><input name="address" id="exampleAddress" placeholder="Duration of the service" type="text" class="form-control"></div>
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Number of attendants allowed</label><input name="address" id="exampleAddress" placeholder="Maximum number of attendants" type="text" class="form-control"></div>                                 
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Choose day</label><select name="select" id="exampleSelect" class="form-control">
                                        <option>Tuesday</option>
                                        <option>Thursday</option>
                                        <option>Sunday</option>
                                    </select>
                                </div>
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Type of service</label><select name="select" id="exampleSelect" class="form-control">
                                        <option>1st service</option>
                                        <option>2nd service</option>
                                    </select>
                                </div>
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1" />
                                            <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                                            </div>
                                        </div>
                                
                                <button class="mt-2 btn btn-success text-center">Create a service</button>
                            </form>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>


    @endsection