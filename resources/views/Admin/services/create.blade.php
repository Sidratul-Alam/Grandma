
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0 mt-2 text-dark"><b>Make new service</b></h5>
                        </div>
                        <div class="ml-auto">
                            <a href="{{route('admin.services.index')}}" class="btn btn-info rounded-0 shadow-none text-white"><i class="fas fa-chevron-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mb-3">
            <div class="row">
                <div class="col-12">
                    @if(Session::has('success'))
                        <p class="text-success mb-0">{{Session::get('success')}}</p>
                    @endif
                    <form action="{{route('admin.services.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- Service title -->
                        <div class="form-group mb-3">
                            @if($errors->has('service_title'))
                                <small class="text-danger">{{ $errors->first('service_title') }}</small>
                            @else
                                <small class="text-muted">Service title</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="service_title" placeholder="Enter service title">
                        </div>

                        <!-- Service Description -->
                        <div class="form-group mb-3">
                            @if($errors->has('service_description'))
                                <small class="text-danger">{{ $errors->first('service_description') }}</small>
                            @else
                                <small class="text-muted">Service Description</small>
                            @endif
                            <textarea class="form-control form-control-lg rounded-0 shadow-none" name="service_description" rows="4"></textarea>
                        </div>

                        <!-- Service image -->
                        <div class="form-group mb-3">
                            @if($errors->has('service_image'))
                                <small class="text-danger">{{ $errors->first('service_image') }}</small>
                            @else
                                <small class="text-muted">Service image</small>
                            @endif
                            <br>
                            <input type="file" name="service_image">
                        </div>

                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="is_upcoming" id="defaultCheck1">
                            @if($errors->has('is_upcoming'))
                                <label class="form-check-label text-danger" for="defaultCheck1">{{ $errors->first('is_upcoming') }}</label>
                            @else
                            <label class="form-check-label" for="defaultCheck1">Upcoming</label>
                            @endif
                            
                        </div>


                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
@endsection