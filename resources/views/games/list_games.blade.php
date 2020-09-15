@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between" style="margin-top: 10px;margin-bottom: 10px">
                    <div class="card-header">All Dhukuti Game:</div>
                    <div class="card-body">
                        <div class="card-columns">
                            @foreach($games as $game)

                                <div class="card bg-light  text-center " style="margin-top: 10px">
                                    <a href='{{route('game.show',$game->id)}}'>
                                        <div class="card-body">
                                            <h5 class="card-title">Rs {{$game->total_game_price}} Dhukuti</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">Opening {{$game->day_played}}</h6>
                                            <h6 class="card-subtitle mb-2 text-muted"> {{$game->number_of_players}} Participants</h6>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
