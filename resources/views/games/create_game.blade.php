@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Welcome to Dhukuti Game') }}</div>
                <div class="card-body" style="background-color: rgba(0,0,0,.50);">
                    <form method="POST" action="{{route('games.store')}}">
                        @csrf

                        <div class="form-group row mt-2 text-center">
                            <label for="number_of_participants"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter No of Participant:') }}</label>

                            <div class="col-md-3">
                                <input id="number_of_participants" type="text"
                                       class="form-control text-center"
                                       name="number_of_participants" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="total_amount"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Total Game Price:') }}</label>

                            <div class="col-md-3">
                                <input id="total_amount" type="text"
                                       class="form-control text-center"
                                       name="total_amount" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="each_kista"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Each Kista Amount:') }}</label>

                            <div class="col-md-3">
                                <input id="each_kista" type="text"
                                       class="form-control text-center"
                                       name="each_kista" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="bhupa_amount"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Bhupa Amount:') }}</label>

                            <div class="col-md-3">
                                <input id="bhupa_amount" type="text"
                                       class="form-control text-center"
                                       name="bhupa_amount" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="quotation_day"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Quotation Day:') }}</label>

                            <div class="col-md-3">
                                <input id="quotation_day" type="text"
                                       class="form-control text-center"
                                       name="quotation_day" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="opening_day"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Opening Day:') }}</label>

                            <div class="col-md-3">
                                <input id="opening_day" type="text"
                                       class="form-control text-center"
                                       name="opening_day" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="pay_day_after_opening"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Maximum Pay Day After Opening:') }}</label>

                            <div class="col-md-3">
                                <input id="pay_day_after_opening" type="text"
                                       class="form-control text-center"
                                       name="pay_day_after_opening" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="quotation_time"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Quotation Time:') }}</label>

                            <div class="col-md-3">
                                <input id="quotation_time" type="time"
                                       class="form-control text-center"
                                       name="quotation_time" required autofocus>
                            </div>
                        </div>


                        <div class="form-group row mt-2 text-center">
                            <label for="quotation_length"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Quotation Length:') }}</label>

                            <div class="col-md-3">
                                <input id="quotation_length" type="text"
                                       class="form-control text-center"
                                       name="quotation_length" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="opening_time"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Opening Time:') }}</label>

                            <div class="col-md-3">
                                <input id="opening_time" type="time"
                                       class="form-control text-center"
                                       name="opening_time" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="pay_interval"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Pay Interval:') }}</label>

                            <div class="col-md-3">
                                <input id="pay_interval" type="text"
                                       class="form-control text-center"
                                       name="pay_interval" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="start_date"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Dhukuti Start Date:') }}</label>

                            <div class="col-md-3">
                                <input id="start_date" type="date"
                                       class="form-control text-center"
                                       name="start_date" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row mt-2 text-center">
                            <label for="end_date"
                                   class="col-md-5 col-form-label text-md-right" style="color: white">{{ __('Enter Dhukuti End Date:') }}</label>

                            <div class="col-md-3">
                                <input id="end_date" type="date"
                                       class="form-control text-center"
                                       name="end_date" required autofocus>
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
