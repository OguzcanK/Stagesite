@extends('master')

@section('title', "$contact->firstname", "$contact->surename")

@section('content')


    <h1>{{ $contact->firstname }} {{ $contact->surename }} </h1>

    <div class="well">
        {{  }}
    </div>
@stop