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
                                    <a class="nav-link active" href="{{route('games.show.rounds',$game->id)}}">Rounds</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('games.show.details',$game->id)}}">Game Details</a>
                                </li>
                            </ul>
                        </div>

                        <div class="card-body">
                            <h5 class="card-title text-white">Total Dhukuti Kistas:</h5>
                            <table class="table table-dark table-striped table-hover">
                                <thead>
                                <tr>
                                    <th scope="col">Round Number</th>
                                    <th scope="col">Round Open Time</th>
                                    <th scope="col">Round Payment</th>
                                    <th scope="col">Round Winner</th>
                                    <th scope="col">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($game->rounds as $round)
                                <tr>
                                    <td>{{$round->round_number}}</td>
                                    <td>{{$round->round_open_time}}</td>
                                    <td>{{$round->round_payment ==''? 'Not Decided yet' : $round->round_payment }}</td>
                                    <td>{{$round->winner_quotation_id ==''? 'Not Decided yet' : $round->winningQuotation->user->name }}</td>
                                    <td><a class="font-weight-bold" style="font-size:24px" href="{{route('rounds.edit',$round->id)}}"><i class="fa fa-edit"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
