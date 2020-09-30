@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __(' Add DateTime') }}</div>
                <div class="card-body">
                    <form method="POST" action="{{route('games.datetime.post')}}">
                        @csrf

                        <div class="card bg-dark text-center">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('games.create')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add Numbers</a>
                                    </li>
                                    <li class="nav-item active">
                                        <a class="nav-link disabled" href="#">Add Days</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Add DateTime</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="card-body ">


                                <div class="form-row mt-5">
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="quotation_time"
                                               class="col-form-label text-md-right"
                                               style="color: white">{{ __('Enter Quotation Time:') }}</label>

                                        <input id="quotation_time" type="time"
                                               class="form-control text-center"
                                               name="quotation_time" value="{{$game->quotation_time ?? ''}}">

                                    </div>


                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="quotation_length"
                                               class=" col-form-label text-md-right"
                                               style="color: white">{{ __('Enter Quotation Length(hrs):') }}</label>


                                        <input id="quotation_length" type="text"
                                               class="form-control text-center"
                                               name="quotation_length" required value="{{$game->quotation_length ?? ''}}">

                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="opening_time"
                                               class=" col-form-label text-md-right"
                                               style="color: white">{{ __('Enter Opening Time:') }}</label>


                                        <input id="opening_time" type="time"
                                               class="form-control text-center"
                                               name="opening_time" required value="{{$game->opening_time ?? ''}}">
                                    </div>


                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="start_date"
                                               class=" col-form-label text-md-right"
                                               style="color: white">{{ __('Enter Dhukuti Start Date:') }}</label>

                                        <input id="start_date" type="date"
                                               class="form-control text-center"
                                               name="start_date" required value="{{$game->start_date ?? ''}}">
                                    </div>
                                </div>

                            </div>

                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-left">
                                        <a href="{{ route('games.days.add') }}" class="btn btn-danger">Previous</a>
                                    </div>
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary">Submit</button>
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
