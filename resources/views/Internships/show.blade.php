@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                                            <div class="well">
                                                <p>Stage:
                                                    van {{ $internship->begin }} tot {{ $internship->end }}
                                                </p>
                                                <p>contact:
                                                </p>
                                                <p>Status:
                                                    {{ $internship->status->name }}
                                                </p>
                                            </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
