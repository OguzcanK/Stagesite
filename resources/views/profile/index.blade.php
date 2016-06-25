
@extends('master')

@section('title', "$profile->firstname", "$profile->surename")

@section('content')


    <div class="row">
        <h3>
            {{ $profile->firstname }} {{ $profile->insertion }} {{ $profile->surename }}
        </h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            Email:<br>
            Tel:<br>
            Company:
        </div>
        <div class="col-md-6">
            {{ $profile->email }}<br>
            {{ $profile->phonenumber }}<br>
            @if(isset($company) or !empty($company))
            <a href="{{ route('company.show', $company->id) }}">{{ $company->name }}</a>
            @endif
        </div>
    </div>
    <div>
        <a href="{{ route('contact.edit', $profile->id) }}" class="btn btn-default"> <span class="glyphicon glyphicon-pencil"></span></a>
        {!! Form::open(['route' => ['contact.destroy', $profile->id], 'method' => 'delete', 'style' => 'display:inline']) !!}
        {!! Form::submit("trash", ['class' => 'btn btn-danger delete']) !!}
        {!! Form::close() !!}
    </div>
@endsection