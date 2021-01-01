@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between">
                    <div class="card-header">Invite Participants:</div>
                    <form method="post" action="{{ route('participants.store',$game->id) }}"  enctype="multipart/form-data">
                        @csrf
                            <div class="card-body text-center">
                                <div class="col-md-12 appending_div form-group">
                                    <div class="row">
                                        <div class="col-md-1 text-center mt-4">
                                            <span class="font-weight-bold">{{$totalPlayers+1}}.</span>
                                            <p hidden id="initial-count">{{$totalPlayers+1}}</p>
                                            <p  hidden id="second-count">{{$remaningPlayers}}</p>
                                        </div>
                                        <div class="col-md-4 text-center">
                                                <input type="text" name="name[]" class="form-control mt-2" value="{{$game->owner->name}}">
                                        </div>
                                        <div class="col-md-6 text-center">
                                                <input type="text" name="email[]" class="form-control mt-2 mb-2" value="{{$game->owner->email}}">
                                        </div>

                                    </div>
                                </div>
                                <span class="fa fa-plus add text-dark " style="font-size: 1.2em"></span>
                            </div>

                        <div class="form-group row mb-4" style="margin-top: 20px">
                            <div class="col-md-6 offset-md-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Next') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function() {
            var total_players=$('#initial-count').html();
            var remaning_players=$('#second-count').html();
            var x=1;

            $('.add').on('click', function(e) {
                e.preventDefault();
                if(x<remaning_players){
                    var i=++total_players
                    var field = '<br><div class="row">' +
                        '<div class="col-md-1 text-center mt-4">'+
                        '<span class="font-weight-bolder">'+ i +'</span>'+
                        '</div>'+
                        '<div class="col-md-4 text-center">' +
                        '<input type="text" name="name[]" placeholder="Enter Participant Name..." class="form-control mt-2"> ' +
                        '</div>'+
                        '<div class="col-md-6  text-center">' +
                        ' <input type="text" name="email[]" placeholder="Enter Participant Email..." class="form-control mt-2 mb-2">' +
                        '</div>'+
                        '</div>';
                    $('.appending_div').append(field);
                    x++;
                }

            })
        })
    </script>
@endsection
