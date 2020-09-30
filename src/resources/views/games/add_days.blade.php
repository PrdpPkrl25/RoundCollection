@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __('Add Days:') }}</div>
                <div class="card-body" >
                    <form method="POST" action="{{route('games.days.post')}}">
                        @csrf

                        <div class="card bg-dark text-center" >
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('games.create')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add Numbers</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link" href="{{route('games.days.add')}}">Add Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add DateTime</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="card-body">

                                <div class="form-row mt-5">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="form-group col-md-2 ml-3 mr-5">
                                        <label for="quotation_day"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Quotation Day:') }}</label>

                                        <input id="quotation_day" type="text"
                                               class="form-control text-center"
                                               name="quotation_day" required value="{{$game->quotation_day ?? ''}}">
                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5 ">
                                        <label for="opening_day"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Opening Day:') }}</label>

                                        <input id="opening_day" type="text"
                                               class="form-control text-center"
                                               name="opening_day" required value="{{$game->opening_day ?? ''}}">

                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="pay_day_after_opening"
                                               class="col-form-label text-md-right" style="color: white">{{ __('Max Pay Day After Opening:') }}</label>

                                        <input id="pay_day_after_opening" type="text"
                                               class="form-control text-center"
                                               name="pay_day_after_opening" required value="{{$game->pay_day_after_opening ?? ''}}">

                                    </div>

                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ route('games.numbers.add') }}" class="btn btn-danger">Previous</a>
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
