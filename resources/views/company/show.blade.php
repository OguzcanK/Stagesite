@extends('master')

@section('title', "$company->name")

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>
                <a href="{{ route('company.index') }}">Go back</a>
            </h2>
        </div>
    </div>

    <div class="row">
        <h3>
            {{ $company->name }}
        </h3>
    </div>

    <div class="row">
        <div class="col-md-6">
            Tel:<br>
        </div>
        <div class="col-md-6">
            {{ $company->phonenumber }}<br>
        </div>
    </div>

    <div class="row">
        <h5><b>Contacts</b></h5>
        <blockquote>
            @foreach($contacten as $contact)
                <a href="{{ route('contact.show', $contact->id) }}">
                    <p>
                        {{ $contact->firstname }}
                    </p>
                </a>
            @endforeach
        </blockquote>
    </div>

    <div class="row">
        <h5><b>Stages</b></h5>
        <blockquote>
            @foreach($stages as $array)
                @foreach($array as $stage)
                    <a href="{{ route('internship.show', $stage->id) }}">
                        <p>
                            <h4>{{--{{ $stage->title }}--}}Title van een stage - {{ $stage->status }}</h4>
                        </p>
                    </a>
                @endforeach
            @endforeach
        </blockquote>
    </div>

@stop