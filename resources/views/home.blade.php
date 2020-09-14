@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">{{ __('Welcome to Dhukuti Game') }}</div>

                <div class="card-body" style="background-color: rgba(0,0,0,.50);">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        <a class="btn btn-warning shadow border" href="{{route('games.create')}}">New Dhukuti Game </a>
                        <a class="btn btn-warning shadow border" href="#">View Game </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
