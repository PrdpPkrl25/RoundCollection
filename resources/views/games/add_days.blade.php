@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __('Step 2: Add Days') }}</div>
                <div class="card-body" >
                    <form method="POST" action="{{route('games.days.post')}}">
                        @csrf

                        <div class="card bg-dark text-center" style="margin-top: 15vh;height: 24rem">
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
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="quotation_day"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Quotation Day:') }}</label>

                                        <input id="quotation_day" type="text"
                                               class="form-control text-center"
                                               name="quotation_day" required autofocus>
                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5 ">
                                        <label for="opening_day"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Opening Day:') }}</label>

                                        <input id="opening_day" type="text"
                                               class="form-control text-center"
                                               name="opening_day" required autofocus>

                                    </div>

                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="pay_day_after_opening"
                                               class="col-form-label text-md-right" style="color: white">{{ __('Max Pay Day After Opening:') }}</label>

                                        <input id="pay_day_after_opening" type="text"
                                               class="form-control text-center"
                                               name="pay_day_after_opening" required autofocus>

                                    </div>

                                    <div class="form-group col-md-2 mr-5 ml-5">
                                        <label for="pay_interval"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Enter Pay Interval:') }}</label>

                                        <input id="pay_interval" type="text"
                                               class="form-control text-center"
                                               name="pay_interval" required autofocus>
                                    </div>
                                </div>

                            </div>
                            <div class="card-footer">
                                <div class="row">
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
