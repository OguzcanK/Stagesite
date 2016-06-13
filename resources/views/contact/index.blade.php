@extends('master')

@section('title', 'Contact')

@section('content')
    <h1>Contacten</h1>
    <div class="contact-wrapper">
        @foreach($contacts as $contact)
            <div class="well">
                <a href="{{ route('contact.show', $contact->id) }}">
                    {{ $contact->firstname }}
                    {{ $contact->surename }}
                </a>
                <a href="{{ route('contact.edit', $contact->id) }}">Wijzig</a>
                {!! Form::open(['route' => ['contact.destroy', $contact->id], 'method' => 'delete']) !!}
                    {!! Form::submit("delete", ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            </div>
        @endforeach
    </div>


@stop

