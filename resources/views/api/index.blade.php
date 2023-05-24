@extends('layouts.base')

@section('content')
    <h1>Api <strong class="text-primary fw-normal">Jsonplaceholder</strong> </h1>


    <div class="row">
        @foreach ($users as $user)
            <div class="col-md-6 my-3">
                <ul class="list-group">
                    <li class="list-group-item active">{{ $user['name'] }}</li>
                    <li class="list-group-item">{{ $user['username'] }}</li>
                    <li class="list-group-item">{{ $user['email'] }}</li>
                    <li class="list-group-item">{{ $user['phone'] }}</li>
                    <li class="list-group-item">{{ $user['website'] }}</li>
                </ul>
            </div>
        @endforeach
    </div>
@endsection
