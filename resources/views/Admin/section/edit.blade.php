
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0 mt-2 text-dark"><b>Edit section</b></h5>
                        </div>
                        <div class="ml-auto">
                            <a href="{{route('admin.section.index')}}" class="btn btn-info rounded-0 shadow-none text-white"><i class="fas fa-chevron-left"></i></a>
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
                    <form action="{{route('admin.section.update', $data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <!--  Service Select -->
                        <div class="form-group mb-3">
                            @if($errors->has('service'))
                                <small class="text-danger">{{ $errors->first('service') }}</small>
                            @else
                                <small class="text-muted">Select service</small>
                            @endif

                            <select class="form-control form-control-lg rounded-0 shadow-none" name="service">
                            <?php
                                use App\Models\Services;
                                $services = Services::all();
                                    foreach($services as $service){
                            ?>
                             <option value="{{$service->id}}">{{$service->service_title}}</option>
                            <?php }?>
                            </select>
                        </div>

                        <!-- Age range -->
                        <div class="form-group mb-3">
                            @if($errors->has('age_range'))
                                <small class="text-danger">{{ $errors->first('age_range') }}</small>
                            @else
                                <small class="text-muted">Age range</small>
                            @endif
                            
                            <select name="age_range" class="form-control form-control-lg rounded-0 shadow-none">
                                <option value="6">0-6 (Month)</option>
                                <option value="12">6-12 (Month)</option>
                                <option value="18">12-18 (Month)</option>
                                <option value="24">18-24 (Month)</option>
                                <option value="30">24-30 (Month)</option>
                                <option value="36">30-36 (Month)</option>
                                <option value="42">36-42 (Month)</option>
                                <option value="48">42-48 (Month)</option>
                            </select>
                        </div>

                        <!-- Section title -->
                        <div class="form-group mb-3">
                            @if($errors->has('title'))
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            @else
                                <small class="text-muted">Section title</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="title"  value="{{$data->title}}">
                        </div>


                        <!-- Details -->
                        <div class="form-group mb-3">
                            @if($errors->has('details'))
                                <small class="text-danger">{{ $errors->first('details') }}</small>
                            @else
                                <small class="text-muted">Section details</small>
                            @endif
                            <textarea name="details" row="15">{!! $data->details !!}</textarea>
                        </div>
                      

                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>



    </div>
</div>
<script>
CKEDITOR.replace( 'details' );
</script>
@endsection