@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card" style="background-color: rgba(0,0,0,.20);height: 100vh">
                <div class="card-header">{{ __('Add New Dhukuti') }} </div>
                <div class="card-body" >
                    <form method="POST" action="{{route('games.store')}}">
                        @csrf

                        <div class="card bg-dark text-center" style="margin-top: 15vh;height: 24rem" >
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
                            <div class="card-body align-items-center d-flex justify-content-center ">
                                <h5 class="card-title text-white"> Fill all the field to add a new dhukuti game.</h5>
                            </div>
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-6 text-right">
                                        <a class="btn btn-primary" href="{{route('games.numbers.add')}}">Click Next</a>
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
