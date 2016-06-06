@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">statusses</div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'reviewstatussen:') !!}
                    {!! Form::select('contact_id', $statusArray, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'stagestatussen:') !!}
                    {!! Form::select('contact_id', $statusArray, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="col-md-4">
                    {!! Form::label('Contactpersoon', 'toolsstatussen:') !!}
                    {!! Form::select('contact_id', $statusArray, null, ['class' => 'form-control']) !!}
                    </div>
                    <div class="panel-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
