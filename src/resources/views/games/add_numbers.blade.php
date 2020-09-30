@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __('Add Numbers:') }}</div>
                <div class="card-body" >
                    <form method="POST" action="{{route('games.numbers.post')}}">
                        @csrf

                        <div class="card bg-dark text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link " href="{{route('games.create')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Add Numbers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add DateTime</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="form-row mt-5">
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="number_of_participants" class=" col-form-label" style="color: white">{{ __('Enter Number of Participants:') }}</label>

                                        <input id="number_of_participants" type="text"
                                               class="form-control text-center"
                                               name="number_of_participants" required autofocus value="{{$game->number_of_participants ?? ''}}">
                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5 ">
                                        <label for="total_amount"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Total Game Price(Rs):') }}</label>

                                        <input id="total_amount" type="text"
                                               class="form-control text-center"
                                               name="total_amount" required autofocus value="{{$game->total_amount ?? ''}}">
                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="each_kista"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Each Kista Amount(Rs):') }}</label>

                                        <input id="each_kista" type="text"
                                               class="form-control text-center"
                                               name="each_kista" required autofocus value="{{$game->each_kista ?? ''}}">
                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="bhupa_amount"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Bhupa Amount(Rs):') }}</label>


                                        <input id="bhupa_amount" type="text"
                                               class="form-control text-center"
                                               name="bhupa_amount" required autofocus value="{{$game->bhupa_amount ?? ''}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ route('games.create') }}" class="btn btn-danger">Previous</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
