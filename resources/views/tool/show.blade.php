@extends('master')

@section('title', "$tool->name")

@section('content')


    <h1>{{ $tool->name }}</h1>

    <div class="well">
        {{ $tool->description }}
    </div>
@stop