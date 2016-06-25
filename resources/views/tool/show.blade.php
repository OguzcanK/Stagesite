@extends('master')

@section('title', "$tool->name")

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h2>
                <a href="{{ route('tool.index') }}">Go back</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <h3>
            {{ $tool->name }}
        </h3>
    </div>
    <div class="row">
        <div class="col-md-5">
            Description<br>
            Status:<br>
        </div>
        <div class="col-md-5">
            {{ $tool->description }}<br>
            {{ $status->name }}
        </div>
        <div class="col-md-12">
            <a href="{{ route('tool.edit', $tool->id) }}" class="btn btn-default"> <span
                        class="glyphicon glyphicon-pencil"></span></a>
            {!! Form::open(['route' => ['location.destroy', $tool->id], 'method' => 'delete', 'class'=>'delete inline']) !!}
            {!! Form::submit("trash", ['class' => 'btn btn-danger delete ']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop


