@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">statusses</div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'reviewstatussen:') !!}
                    {!! Form::select('status_id', $statusArray, null, ['class' => 'form-control']) !!}

                        <a href="" class="btn btn-info">Verander</a>
                    </div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'toolsstatussen:') !!}
                    {!! Form::select('status_id', $statusArray1, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'stagestatussen:') !!}
                    {!! Form::select('status_id', $statusArray2, null, ['class' => 'form-control']) !!}
                    </div>

                </div>
                <div class="panel-body">
                    <a href="{{route("status.create") }}" class="btn btn-success">status toevoegen</a>
                </div>
            </div>
        </div>
    </div>
@endsection
