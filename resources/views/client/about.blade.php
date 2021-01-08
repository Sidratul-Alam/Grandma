@extends('Layouts.website')
@section('content')

<div class="about">
    <div class="header">
        <div class="overlay">
            <div class="flex-center flex-column">
                <h2>ABOUT US</h2>
                <h5>WE HAVE 25 YEARS EXERIENCE IN BABY CARE</h5>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h2>TEAM MEMBERS</h2>
                </div>
            </div>

            <div class="row">

                @foreach($members as $member)
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="card rounded-0">
                        <img src="{{url('')}}/website/images/team/{{$member->image}}" class="w-100 img-fluid">
                        <div class="card-body text-center">
                            <h5>{{$member->name}}</h5>
                            <p>{{$member->title}}</p>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
</div>

@endsection