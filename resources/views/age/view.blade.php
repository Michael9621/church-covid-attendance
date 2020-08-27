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
                        <div class="card-header">Age groups
                        </div>
                        <div class="table-responsive">
                            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th class="text-center">Edit</th>
                                    <th class="text-center">Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ages as $age)
                                <tr>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-subheading opacity-7">{{ $age->age}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    
                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-success btn-sm" ><a href="{{ route('age-edit', ['id' => $age->id]) }}">Edit</a></button>
                                    </td>

                                    <td class="text-center">
                                        <button type="button" id="PopoverCustomT-1" class="btn btn-danger btn-sm"><a href="{{ route('age-destroy', ['id' => $age->id]) }}">Delete </a></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>


    @endsection