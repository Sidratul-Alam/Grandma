@extends('Layouts.website')
@section('content')

<div class="contact">
    <div class="header text-center">
        <img src="{{asset('website/images/static/contact_us.png')}}" class="img-fluid">
    </div>

    <div class="main-content">
        <div class="container">
            <div class="row mb-4 mb-lg-5">
                <div class="col-12 text-center">
                    <h1>CONTACT US</h1>
                </div>
            </div>

            <div class="row mb-4 mb-lg-5">
                <div class="col-12">
                    <form action="{{route('message')}}" method="post">
                        @csrf
                        <div class="row">

                            <!-- Name -->
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-3">
                                    @if($errors->has('name'))
                                        <p class="text-danger" for="name">{{ $errors->first('name') }}</p>
                                    @else 
                                        <p for="name">Name</p>
                                    @endif

                                    <input type="text" name="name" class="form-control shadow-none" placeholder="Your name">
                                </div>
                            </div>

                            <!-- E-mail -->
                            <div class="col-12 col-lg-6">
                                <div class="form-group mb-3">
                                    @if($errors->has('email'))
                                        <p class="text-danger" for="email">{{ $errors->first('email') }}</p>
                                    @else 
                                    <p for="email">E-mail</p>
                                    @endif

                                    <input type="email" name="email" class="form-control shadow-none" placeholder="Your e-mail">
                                </div>
                            </div>

                            <!-- Message -->
                            <div class="col-12">
                                <div class="form-group mb-3">
                                    @if($errors->has('message'))
                                        <p class="text-danger" for="message">{{ $errors->first('message') }}</p>
                                    @else 
                                        <p for="message">Message</p>
                                    @endif

                                    <textarea name="message" class="form-control shadow-none"rows="4" placeholder="Write your message"></textarea>
                                </div>
                            </div>

                            <div class="col-12 text-right">
                                <button type="submit" class="btn shadow-none">Send Message</button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection