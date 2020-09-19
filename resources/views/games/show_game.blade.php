@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between" style="background-color: rgba(0,0,0,.20);">
                    <div class="card-header">Welcome to Game:</div>
                    <div class="card-body">
                        <div class="card bg-dark text-center" style="height: 20rem">
                            <div class="card-header">
                                <ul class="nav nav-tabs card-header-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Select Winner</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Game Details</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Rounds</a>
                                    </li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title text-white">Welcome to Round</h5>
                                <p class="card-text">.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
