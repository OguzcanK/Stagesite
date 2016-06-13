@extends('master')

@section('title', 'Tool')

@section('content')
    <h1>Tools</h1>
    <div class="contact-wrapper">
        @foreach($tool as $tools)
            <div class="well">
                <a href="{{ route('tool.show', $tools->id) }}">
                    {{ $tools->name }}

                </a>
                <a href="{{ route('tool.destroy', $tools->id) }}" data-token="{{ csrf_token() }}" class="delete">Verwijderen</a>
                <a href="{{ route('tool.edit', $tools->id) }}">Wijzig</a>
            </div>
        @endforeach
    </div>


@stop
