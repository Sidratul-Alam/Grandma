@extends('Layouts.account')
@section('content')

<div class="suggestion">
    <div class="card rounded-0 shadow-sm border-0 my-3">
        <div class="card-body">
            @foreach ($vaccines as $vaccine)
                         
                <h3 class="text-dark font-weight-bold mb-0">{{$vaccine->service_title}}</h3>
                {!! $vaccine->details !!}
                    
            @endforeach
        </div>
    </div>

    
</div>

@endsection