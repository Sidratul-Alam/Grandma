@extends('Layouts.account')
@section('content')

<div class="suggestion">

    <div class="card rounded-0 shadow-sm border-0">
        <div class="card-body">

            <table>
                <tr>
                    <td><p class="text-capitalize mb-0"><b>Child's Name </b><p></td>
                    <td><p>: {{$baby->name}}</p></td>
                </tr>
                <tr>
                    <td><p class="text-capitalize mb-0"><b>Child's Date Of Birth </b><p></td>
                    <td><p>: {{$baby->date_of_birth}}</p></td>
                </tr>
                <tr>
                    <td><p class="text-capitalize mb-0"><b>Child's Age </b><p></td>
                    <td><p>: {{$diff->y}} year, {{$diff->m}} month {{$diff->d}} days </p></td>
                </tr>
            </table>
           
        </div>
    </div>

    <div class="card rounded-0 shadow-sm border-0 my-3">
        <div class="card-body">
            <h5 class="mb-0">Suggestion for : {{$diff->y}} year, {{$diff->m}} month {{$diff->d}} days child</h5>
        </div>
    </div>

    @if(count($final_suggestion) > 0)
    <div id="accordion">
        @foreach ($final_suggestion as $suggestion)
           
        
        <div class="card border-0 rounded-0 bg-white">
            <div class="card-header bg-white" id="heading">
                <button class="btn shadow-none collapsed btn-block text-left" data-toggle="collapse" data-target="#collapse{{ $suggestion->id }}" aria-expanded="false" aria-controls="collapse">
                    <h3 class="text-dark font-weight-bold mb-0">{{$suggestion->service_title}}</h3>
              </h5>
            </div>
            <div id="collapse{{ $suggestion->id }}" class="collapse" aria-labelledby="heading" data-parent="#accordion">
              <div class="card-body">
                <h4 class="text-black mb-4"><i class="fab fa-angellist text-success mr-2"></i>{{$suggestion->title}}</h4>
                {!! $suggestion->details !!}
              </div>
            </div>
        </div>
             


        @endforeach
    </div>


        




    @else
        <p class="bg-danger text-center text-white p-1">No suggestion for this age.</p>
    @endif

</div>

@endsection