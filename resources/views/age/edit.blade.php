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
                        <div>Edit Age group
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
                            <form class="" method="POST" action="{{ route('age-update', ['id' => $age->id])}}">
                                <div class="position-relative form-group"><label for="exampleAddress" class="">Age Group</label><input name="age" id="exampleAddress" placeholder="{{$age->age}}" type="text" class="form-control"></div>                                
                                <button class="mt-2 btn btn-success text-center">Add age group</button>
                                @csrf
                            </form>
                        </div>
                    </div>
                   
                </div>
              
            </div>
        </div>



    @endsection