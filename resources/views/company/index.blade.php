@extends('master')

@section('title', 'Company')

@section('content')
    <h1>Companies</h1>
    <div class="contact-wrapper">
        @foreach($company as $companys)
            <div class="well">
                <a href="{{ route('company.show', $companys->id) }}">
                    {{ $companys->name }}

                </a>
                <a href="{{ route('company.destroy', $companys->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                <a href="{{ route('company.edit', $companys->id) }}">Wijzig</a>
            </div>
        @endforeach
    </div>


@stop
