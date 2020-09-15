@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card" style="width: 50rem;height: 30rem">
                    <div class="card-header">{{ __('Welcome to Dhukuti Game') }}</div>

                    <div class="card-body " style="background-color: rgba(0,0,0,.35);">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="card bg-light " style="margin: 9rem;">
                            <a class="btn btn-secondary shadow border" href="{{route('games.create')}}">
                                <div class="card-body text-center">
                                    <h2 class="product-title">Start New Dhukuti </h2>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
