@extends('Layouts.website')
@section('content')

<div class="service-show">
    <div class="container py-4">
        @if($service)
        <div class="row">
            <div class="col-12 col-lg-6 mb-4">
                <div class="card border-0">
                    <img src="{{ url('')}}/website/images/services/{{$service->service_image }}" class="card-img img-fluid" style="max-height: 300px;">
                </div>
            </div>

            <div class="col-12 col-lg-6">
                <div class="card bg-white border-0">
                    <div class="card-body">
                        <h5>{{$service->service_title}}</h5>
                        <p>{{$service->service_description}}</p>
                    </div>
                </div>
            </div>
           
        </div>
        @else 
        <div class="row">
            <div class="col-12">
                <div class="card border-0 text-center">
                    <div class="card-body">
                        <h5>Service not found !!</h5>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>

@endsection