@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __('Add New Dhukuti') }} </div>
                <div class="card-body" >
                    <form method="POST" action="{{route('games.store')}}">
                        @csrf

                        <div class="card bg-dark text-center" >
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="{{route('games.create')}}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add Numbers</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Add Days</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link disabled" href="#">Add DateTime</a>
                                    </li>


                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="text-left">
                                    <h5 class="text-white">Fill all the field in each step:</h5>
                                </div>
                                <div class="form-row mt-5 ml-4">
                                        <label  style="color: white">Will the owner be the first bidder? </label>
                                        <div class="form-group ml-5 mr-5">
                                            <label for="yes" class=" mr-3" style="color: white">{{ __('Yes:') }}
                                                <input id="yes" type="radio" class="form-control text-center" name="owner_as_first_bidder"  value="1" {{ (isset($game->owner_as_first_bidder) && $game->owner_as_first_bidder == '1') ? "checked" : "" }}></label>

                                            <label for="no" class="custom-radio" style="color: white">{{ __('No:') }}
                                                <input id="no" type="radio" class="form-control text-center" name="owner_as_first_bidder"  value="0" {{ (isset($game->owner_as_first_bidder) && $game->owner_as_first_bidder == '0') ? "checked" : "" }} ></label>
                                        </div>
                                        <div class="form-group col-md-3 ml-5" id="form" style="display: none">
                                            <label for="first_bidding_amount"
                                                   class=" col-form-label text-left" style="color: white">{{ __('Enter first bidder bidding amount:') }}</label>
                                            <input id="first_bidding_amount" type="text"
                                                   class="form-control text-center"
                                                   name="first_bidding_amount" value="{{$game->first_bidding_amount ?? ''}}" required autofocus>
                                        </div>

                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6">

                                    </div>
                                    <div class="col-md-6 text-center">
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

@section('script')
    <script>
        $(document).ready(function(){
                var form = document.getElementById("form");
                if ($("#yes").is(":checked")) {
                    form.style.display = "block";
                }
                else if($("#no").is(":checked")){
                    form.style.display = "none";
                }

            });

        $("input[type=radio]").click(function() {
            var form = document.getElementById("form");
            if($('#yes').is(':checked')) {
                form.style.display = "block";
            }
            else{
                form.style.display = "none";
            }

        });
    </script>

@endsection
