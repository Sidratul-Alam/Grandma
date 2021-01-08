
@extends('Layouts.account')
@section('content')
  
<div class="dashboard">
   
    <!-- Main Content -->
    <div class="main-content">
        <div class="card border-0 rounded-0 shadow-sm">
            <div class="card-body">
                <p class="mb-2">You,</p>
                <h5 class="mb-2"><b><span><i class="fas fa-user-tie text-muted mr-2"></i></span>{{Auth()->User()->name}}</b></h5>
                <p><span><i class="fas fa-envelope text-muted mr-2"></i></span>{{Auth()->User()->email}}</p>
            </div>
        </div>
    </div>

    <!-- Baby info modal -->
    @if(!$baby)
    <div class="custom-modal-backdrop">
        <div class="flex-center flex-column">
            <div class="card border-0 shadow-lg rounded-0">
                <div class="card-header bg-white">
                    <h5 class="text-black mb-0"><b>Baby Information</b></h5>
                    <p class="text-muted mb-0">Fill-up all information clearly.</p>
                </div>
                <div class="card-body">
                    <form action="{{route('account.baby.add')}}" method="post">
                        @csrf

                        <!-- Name -->
                        <div class="form-group mb-4">
                            @if($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @else
                                <small class="text-black">Name</small>
                            @endif
                            
                            <input type="text" class="form-control rounded-0 shadow-none" name="name">
                        </div>

                        <!-- D.O.B -->
                        <div class="form-group mb-4">
                            @if($errors->has('date_of_birth'))
                                <small class="text-danger">{{ $errors->first('date_of_birth') }}</small>
                            @else
                                <small class="text-black">Date of birth</small>
                            @endif
                            
                            <input type="date" class="form-control rounded-0 shadow-none" name="date_of_birth">
                        </div>

                        <button type="submit" class="btn btn-primary rounded-0 shadow-none text-white float-right px-4">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>

@endsection