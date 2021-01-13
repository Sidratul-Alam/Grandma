
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <div class="d-flex">
                        <div>
                            <h5 class="mb-0 mt-2 text-dark"><b>Make new section</b></h5>
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
                    <form action="{{route('admin.section.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
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
                                <option value="6">0 Month - 6 Month</option>
                                <option value="12">6 Month - 1 Year</option>
                                <option value="18">1 Year - 1 Year 6 Month</option>
                                <option value="24">1 Year 6 Month - 2 Year</option>
                                <option value="30">2 Year - 2 Year 6 Month</option>
                                <option value="36">2 Year 6 Month - 3 Year</option>
                                <option value="42">3 Year - 3 Year 6 Month</option>
                                <option value="48">3 Year 6 Month - 4 Year</option>

                                <option value="54">4 Year - 4 Year 6 Month</option>
                                <option value="60">4 Year 6 Month - 5 Year </option>
                                <option value="66">5 Year - 5 Year 6 Month </option>
                                <option value="72">5 Year 6 Month - 6 Year</option>
                                <option value="0">All</option>
                            </select>
                        </div>

                        <!-- Section title -->
                        <div class="form-group mb-3">
                            @if($errors->has('title'))
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            @else
                                <small class="text-muted">Section title</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="title" placeholder="Enter section title">
                        </div>


                        <!-- Details -->
                        <div class="form-group mb-3">
                            @if($errors->has('details'))
                                <small class="text-danger">{{ $errors->first('details') }}</small>
                            @else
                                <small class="text-muted">Section details</small>
                            @endif
                            <textarea name="details" row="15"></textarea>
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