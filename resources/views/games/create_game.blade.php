@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Dhukuti Game') }}</div>
                <div class="card-body" style="background-color: rgba(0,0,0,.75);">
                    <form method="POST" action="{{route('games.store')}}">
                        @csrf

                        <div class="form-group row mt-2 text-center">
                            <label for="number_of_players"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter No of Participant:') }}</label>

                            <div class="col-md-3">
                                <input id="number_of_players" type="text"
                                       class="form-control text-center"
                                       name="number_of_players" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="total_game_span"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Total Game Span:') }}</label>

                            <div class="col-md-3">
                                <input id="total_game_span" type="text"
                                       class="form-control text-center"
                                       name="total_game_span" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="total_game_price"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Total Game Price:') }}</label>

                            <div class="col-md-3">
                                <input id="total_game_price" type="text"
                                       class="form-control text-center"
                                       name="total_game_price" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-3 offset-md-5  text-center">
                                <button type="submit" class="btn btn-block btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
