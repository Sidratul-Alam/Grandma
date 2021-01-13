
@extends('Layouts.admin')
@section('content')

<div class="container-fluid px-lg-4">
    <div class="row">

        <div class="col-12 my-3">
            <div class="card rounded-0 border-0 shadow">
                <div class="card-body">
                    <h5 class="mb-0 mt-2 text-dark"><b>All Users</b></h5>
                </div>
            </div>
        </div>

        <div class="col-12 mb-4">
            <table class="table table-bordered table-responsive-md">
                <thead>
                    <tr>
                        <td><p class="mb-0 text-dark"><b>SL</b></p></td>
                        <td><p class="mb-0 text-dark"><b>Name</b></p></td>
                        <td><p class="mb-0 text-dark"><b>E-mail</b></p></td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($users as $key => $user)
                    <tr>
                        <td><p class="mb-0 text-dark"><b>{{$key+1}}</b></p></td>
                        <td><p class="mb-0 text-dark"><b>{{$user->name}}</b></p></td>
                        <td><p class="mb-0 text-dark">{{$user->email}}</p></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>

@endsection