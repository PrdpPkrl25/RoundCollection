@extends('layouts.app')

@section('content')
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between" style="background-color: rgba(0,0,0,.20);">
                    <div class="card-body">
                        <div class="card bg-dark text-center" style="height: 20rem">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('games.show',$game->id)}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('games.show.rounds',$game->id)}}">Rounds</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('games.show.details',$game->id)}}">Game Details</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Welcome to Kista {{$previousRound->round_number}}</h5>
                                <p class="card-text">.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
