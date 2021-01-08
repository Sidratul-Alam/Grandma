
@extends('Layouts.website')
@section('content')

<div class="welcome">

<!-- Slider -->
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($banners as $key => $banner)
            <div class="carousel-item  {{ $loop->first ? 'active' : '' }}">
                <img src="{{url('')}}/website/images/banners/{{$banner->banner_image}}" class="w-100 img-fluid">
            </div>
            @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Description -->
    <div class="description">
        <div class="container">

            <!-- Education -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center d-lg-none">
                    <img src="{{asset('website/images/static/reading.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pr-lg-5 text-center text-lg-left">
                    <h2>Baby Education</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas vero earum culpa soluta, itaque debitis molestiae laboriosam cupiditate corporis, iure cum officiis maiores recusandae minus assumenda provident commodi dolor expedita, in praesentium at. Ex earum omnis quidem quisquam, labore optio totam temporibus tenetur assumenda necessitatibus delectus reprehenderit quia ?</p>
                </div>
                <div class="col-12 col-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('website/images/static/reading.png')}}" class="img-fluid">
                </div>
            </div>

            <!-- Medical -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center">
                    <img src="{{asset('website/images/static/medical.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pl-lg-5 text-center text-lg-right">
                    <h2>Baby Medicine</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas vero earum culpa soluta, itaque debitis molestiae laboriosam cupiditate corporis, iure cum officiis maiores recusandae minus assumenda provident commodi dolor expedita, in praesentium at. Ex earum omnis quidem quisquam, labore optio totam temporibus tenetur assumenda necessitatibus delectus reprehenderit quia ?</p>
                </div>
            </div>

            <!-- Food -->
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 col-lg-5 text-center d-lg-none">
                    <img src="{{asset('website/images/static/eating.png')}}" class="img-fluid">
                </div>
                <div class="col-12 col-lg-7 pt-lg-5 pr-lg-5 text-center text-lg-left">
                    <h2>Baby Food</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quas vero earum culpa soluta, itaque debitis molestiae laboriosam cupiditate corporis, iure cum officiis maiores recusandae minus assumenda provident commodi dolor expedita, in praesentium at. Ex earum omnis quidem quisquam, labore optio totam temporibus tenetur assumenda necessitatibus delectus reprehenderit quia ?</p>
                </div>
                <div class="col-12 col-lg-5 text-center d-none d-lg-block">
                    <img src="{{asset('website/images/static/eating.png')}}" class="img-fluid">
                </div>
            </div>

        </div>
    </div>

    <!-- Gallery -->
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>Photo Gallery</h2>
                </div>

                <div class="col-12">

                    @foreach($photos as $photo)
                    <div class="card border-0 rounded-0 photo-card">
                        <img src="{{url('')}}/website/images/gallery/{{$photo->image}}" class="img-fluid">
                        <div class="overlay">
                            <div class="flex-center flex-column text-center">
                                <p class="mb-0">{{$photo->title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>

            </div>
        </div>
    </div>

</div>


@endsection