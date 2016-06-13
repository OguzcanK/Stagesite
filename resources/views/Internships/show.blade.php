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


                    <div class="panel-body">
                        {!! Form::open(['url' => ['review'], 'method' => 'POST']) !!}

                        <fieldset class="col-md-5">
                            <legend>New review</legend>
                            <div class="form-group ">
                                {!! Form::label('mark', 'Cijfer:*') !!}
                                {!! Form::text('mark', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group ">
                                {!! Form::label('review', 'review:*') !!}
                                {!! Form::textarea('review', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                        </fieldset>

                        <div class="form-group col-md-12">
                            {!! Form::submit('review toevoegen!', ['class' => 'btn btn-primary form-control ']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
