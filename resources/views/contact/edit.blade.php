@extends('master')

@section('title', 'Edit contact')

@section('content')
    <h1>Edit contact</h1>
    {!! Form::model($contact, ['route' => ['contact.update', $contact->id], 'method' => 'put']) !!}
    @include('contact.forms.contact')
    {!! Form::close() !!}
@stop