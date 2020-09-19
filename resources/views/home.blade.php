@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card align-content-between"  style="background-color: rgba(0,0,0,.20);">
                <div class="card-header"
                    >{{ __('My Dhukuti') }}</div>
                <div class="card-body " >
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row equal">
                        @if(!$games->isEmpty())
                            @for($i=0;$i<count($games);$i++)
                                <div class="col-sm-4 py-2">
                                    <div class="card bg-secondary shadow text-center h-100 ">
                                        <a class="text-white shadow  " href="{{route('games.show',$games[$i]->id)}}">
                                            <div class="card-body ">
                                                <h3 class=" mt-4"> DHUKUTI RASHI Rs{{$games[$i]->total_amount}}</h3>
                                                <h3 class=" mt-2"> TOTAL
                                                    PARTICIPANTS {{$games[$i]->number_of_participants}} </h3>
                                                <h3 class=" mt-2"> START DATE {{\Carbon\Carbon::parse($games[$i]->start_date)->format('d-M-Y')}} </h3>
                                                <h3 class=" mt-2"> NEXT OPENING DATE </h3>
                                                <h3 class=" mt-2"> END DATE {{\Carbon\Carbon::parse($games[$i]->end_date)->format('d-M-Y')}} </h3>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                         style="width:{{$percentages[$i]}}">{{$percentages[$i]}}</div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endfor
                        @endif
                        <div class="col-sm-4 py-2">
                            <div class="card bg-secondary shadow text-center h-100 ">
                                <div class="card-body align-items-center d-flex justify-content-center ">
                                    <a class="text-white " href="{{route('games.create')}}">
                                        <i class="fa fa-plus-circle" style="font-size:80px"></i>
                                        <h3 class=" mt-2"> Add New Dhukuti </h3>
                                    </a>
                                </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
