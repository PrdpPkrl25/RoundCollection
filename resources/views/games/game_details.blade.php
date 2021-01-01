@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card align-content-between" style="background-color: rgba(0,0,0,.20);">
                <div class="card-body">
                    <div class="card bg-dark text-center">
                        <div class="card-header">
                            <ul class="nav nav-tabs card-header-tabs">
                                <li class="nav-item">
                                    <a class="nav-link " href="{{route('games.show',$game->id)}}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('games.show.rounds',$game->id)}}">Rounds</a>
                                </li>
                                <li class="nav-item active">
                                    <a class="nav-link" href="{{route('games.show.details',$game->id)}}">Game Details</a>
                                </li>


                            </ul>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="card-title text-white">All Participants:</h5>
                                    <table class="table table-dark table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">S.N</th>
                                            <th scope="col">Participants Name</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($game->participants()->get() as $participant)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$participant->name}}</td>
                                                <td>Bhupa</td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="card-title text-white">Game Details:</h5>
                                    <table class="table table-dark table-striped table-hover">
                                        <thead>
                                        <tr>
                                            <th scope="col">Game Info</th>
                                            <th scope="col">Value</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>{{__('Total Dhukuti Amount')}}</td>
                                                <td>Rs {{$game->total_amount}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Each Kista Amount')}}</td>
                                                <td>Rs {{$game->each_kista}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Bhupa Amount')}}</td>
                                                <td>Rs {{$game->bhupa_amount}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Dhukuti Start Date')}}</td>
                                                <td>{{$game->start_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Dhukuti End Date')}}</td>
                                                <td>{{$game->end_date}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Quotation Day')}}</td>
                                                <td>{{$game->quotation_day}} of a month</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Quotation Time')}}</td>
                                                <td>{{\Carbon\Carbon::parse($game->quotation_time)->format('g:i A')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Quotation Length')}}</td>
                                                <td>{{$game->quotation_length}} hrs</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Opening Day')}}</td>
                                                <td>{{$game->opening_day}} of a month</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Opening Time')}}</td>
                                                <td>{{\Carbon\Carbon::parse($game->opening_time)->format('g:i A')}}</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Maximum PayDay After Opening')}}</td>
                                                <td>{{$game->pay_day_after_opening}} days</td>
                                            </tr>
                                            <tr>
                                                <td>{{__('Pay Interval')}}</td>
                                                <td>{{$game->pay_interval}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
