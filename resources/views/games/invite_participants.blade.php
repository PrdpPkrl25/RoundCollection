@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card align-content-between">
                    <div class="card-header">Invite Participants:</div>
                    <form method="post" action="{{ route('participants.store',$gameId) }}"  enctype="multipart/form-data">
                        @csrf
                            <div class="card-body text-center">
                                <div class="col-md-12 appending_div form-group">
                                    <div class="row">
                                            <div class="col-md-4 text-center offset-md-1">
                                                <strong>Participant Name:</strong>
                                                <input type="text" name="player_name[]" class="form-control mt-2">
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <strong>Email:</strong>
                                                <input type="text" name="email[]" class="form-control mt-2 mb-4">
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
            var i=1;
            $('.add').on('click', function() {
                var field = '<br><div class="row"><div class="col-md-4 offset-md-1 text-center">' +
                    '<strong>Participant Name:</strong> ' +
                    '<input type="text" name="name[]"  class="form-control mt-2"> ' +
                    '</div>'+
                    '<div class="col-md-6  text-center">' +
                    ' <strong>Email:</strong> ' +
                    ' <input type="text" name="email[]"  class="form-control mt-2 mb-4">' +
                    '</div>'+
                    '</div>';
                $('.appending_div').append(field);
            })
        })
    </script>
@endsection
