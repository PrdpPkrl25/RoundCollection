@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);">
                <div class="card-header">{{ __('Fill Quotation for kista ').$round->round_number }}</div>
                <div class="card-body">
                    <div class="card bg-dark text-center" style="height: 20rem">
                        <form method="POST" action="{{route('quotations.post',$round->id)}}">
                            @csrf
                            <div class="card-body">
                                    <div class="form-row mt-5">
                                        <div class="col-md-3">

                                        </div>
                                        <div class="form-group col-md-2 ml-5 mr-5">
                                            <label for="bidding_amount" class=" col-form-label"
                                                   style="color: white">{{ __('Enter Deduction Amount:') }}</label>

                                            <input id="bidding_amount" type="text"
                                                   class="form-control text-center"
                                                   name="bidding_amount" required autofocus>
                                        </div>

                                        <div class="form-group col-md-2 ml-5 mr-5 ">
                                            <label for="comment"
                                                   class=" col-form-label text-md-right"
                                                   style="color: white">{{ __('Enter Comment(Any):') }}</label>

                                            <input id="total_amount" type="text"
                                                   class="form-control text-center"
                                                   name="comment" required autofocus>
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
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
