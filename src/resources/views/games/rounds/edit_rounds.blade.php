@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">Make Change to Round {{$round->round_number}} Value:</div>
                <div class="card-body" >
                    <form method="POST" action="{{route('rounds.update',$round->id)}}">
                        @csrf

                        <div class="card bg-dark text-center">
                            <div class="card-header">
                                <hr class="font-weight-bold" style="height: 45px;background-color: white;width: 83%">
                            </div>
                            <div class="card-body">
                                <div class="form-row mt-5">
                                    <div class="col-md-1">

                                    </div>
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="quotation_open_time" class=" col-form-label" style="color: white">{{ __('Quotation Open Time:') }}</label>

                                        <input id="quotation_open_time" type="datetime-local"
                                               class="form-control text-center"
                                               name="quotation_open_time" required autofocus value="{{$round->quotation_open_time}}">
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="form-group col-md-2 ml-5 mr-5 ">
                                        <label for="quotation_end_time"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Quotation End Time:') }}</label>

                                        <input id="quotation_end_time" type="datetime-local"
                                               class="form-control text-center"
                                               name="quotation_end_time" required autofocus value="{{$round->quotation_end_time}}">
                                    </div>
                                    <div class="col-md-1">

                                    </div>
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="round_open_time"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Round Open Time:') }}</label>

                                        <input id="round_open_time" type="datetime-local"
                                               class="form-control text-center"
                                               name="round_open_time" required autofocus value="{{$round->round_open_time}}">
                                    </div>
                                </div>

                                <div class="form-row mt-5">
                                    <div class="col-md-2">

                                    </div>
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="minimum_bid_amount"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Minimum Bid Amount') }}</label>


                                        <input id="minimum_bid_amount" type="text"
                                               class="form-control text-center"
                                               name="minimum_bid_amount" required autofocus value="{{$round->minimum_bid_amount}}">
                                    </div>
                                    <div class="col-md-3">

                                    </div>
                                    <div class="form-group col-md-2 ml-5 mr-5">
                                        <label for="bhupa_amount"
                                               class=" col-form-label text-md-right" style="color: white">{{ __('Bhupa Amount') }}</label>


                                        <input id="bhupa_amount" type="text"
                                               class="form-control text-center"
                                               name="bhupa_amount" required autofocus value="{{$round->bhupa_amount}}">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-right">
                                        <button type="submit" class="btn btn-primary">Save</button>
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
