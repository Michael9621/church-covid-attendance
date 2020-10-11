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
                        <div>Create a service type
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
                            <form method="POST" action="{{ route('type-update', ['id'=>$type->id]) }}">
                                
                                
                                <div class="position-relative form-group"><label for="exampleSelect" class="">Choose type</label><select name="type" id="exampleSelect" class="form-control">
                                        <option></option>
                                        <option value="0">Normal</option>
                                        <option value="1">Campmeeting/VBS/Weekof prayer</option>
                                
                                    </select>
                                </div>
                                
                                <button class="mt-2 btn btn-success text-center">Create a service</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>


    @endsection