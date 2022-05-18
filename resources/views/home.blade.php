@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <h1>Users Name</h1>
                    
                    @isset($users)
 
                            @foreach ($users as $user)
                                <p>id: {{ $user->id }}- name :  {{ $user->name }} - email :{{ $user->email }}</p>
                            @endforeach

                            lenght: <b>{{ $users->count() }}</b>
                    @endisset


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
