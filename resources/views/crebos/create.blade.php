@extends('master')

@section('title', 'Add a Location')

@section('content')
    <h1>Add a school</h1>
    {!! Form::open(['route' => 'crebo.store']) !!}
    @include('crebos.forms.crebo')
    {!! Form::close() !!}

@stop