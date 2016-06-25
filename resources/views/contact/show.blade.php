@extends('master')

@section('title', "$contact->firstname", "$contact->surename")

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>
                <a href="{{ route('contact.index') }}">Go back</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <h3>
            {{ $contact->firstname }} {{ $contact->insertion }} {{ $contact->surename }}
        </h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            Email:<br>
            Tel:<br>

            @if($company != NULL)
            Company:
            @elseif($school != NULL)
            School:
            @endif
        </div>
        <div class="col-md-6">
            {{ $contact->email }}<br>
            {{ $contact->phonenumber }}<br>
            @if($company != NULL)
                <a href="{{ route('company.show', $company->id) }}">{{ $company->name }}</a>
            @elseif($school != NULL)
                <a href="{{ route('school.show', $school->id) }}">{{ $school->name }}</a>
            @endif
        </div>
    </div>
    <div>
        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-default"> <span class="glyphicon glyphicon-pencil"></span></a>
        {!! Form::open(['route' => ['contact.destroy', $contact->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
        {!! Form::submit("trash", ['class' => 'btn btn-danger delete']) !!}
        {!! Form::close() !!}
    </div>
@stop