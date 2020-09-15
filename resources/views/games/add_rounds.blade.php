@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between" style="margin-top: 10px;">
                    <div class="card-header">Welcome to Game:</div>
                    <div class="card-body">
                        <div class="card text-center" style="height: 20rem">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('game.show',$game->id)}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Add round</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Game Details</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body" style="margin: 3rem">
                                <a class="btn btn-secondary shadow border" href="{{route('rounds.store')}}">
                                    <div class="card-body text-center">
                                        <h2 class="card-title text-white">Add Round</h2>
                                        <i class="fa fa-plus" style="font-size:36px"></i>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
