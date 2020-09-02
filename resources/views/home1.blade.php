@extends('layouts.layout')

    @section('content')
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="pe-7s-graph text-success">
                            </i>
                        </div>
                        <div>Church Attendance App(COVID)
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
                            <form method="POST" action="{{ route('member-store') }}">
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Name</label><input name="name" id="exampleAddress" placeholder="name" type="text" class="form-control" required></div>
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Identification Number (ID)</label><input name="id" id="exampleAddress2" placeholder="ID" type="number" class="form-control" required>
                                </div>
                                <div class="position-relative form-group"><label for="exampleAddress2" class="">Phone Number</label><input name="phone" id="exampleAddress2" placeholder="Phone Number" type="number" class="form-control" required minlength="9" maxlength="10">

                                <div class="position-relative form-group"><label for="exampleSelect" class="">Choose the Age group</label>
                                    
                                    <select name="age" id="exampleSelect" class="form-control" required>
                                        <option></option>
                                        @foreach($ages as $age)
                                            <option>{{ $age->age }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="position-relative form-group"><label for="exampleSelect" class="">Choose the service</label>
                                    
                                    <select name="service_id" id="exampleSelect" class="form-control" required>
                                        <option></option>
                                        @foreach($services as $service)
                                            <option>{{ $service->day }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="row"> 
                                    <div class="col-sm-6">
                                        <div class="position-relative form-check"><label class="form-check-label"><input name="gender" value="0" type="radio" class="form-check-input" required> Male</label></div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="position-relative form-check"><label class="form-check-label"><input name="gender" value="1" type="radio" class="form-check-input"> Female</label></div>
                                    </div>
                                </div>

                                
                                <button class="mt-2 btn btn-success text-center">Register</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>
    @endsection