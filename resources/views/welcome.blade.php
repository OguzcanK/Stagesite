@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach($company as $c)
                        <div class="well-lg">
                            <p><h1>Bedrijf:</h1>
                                <h2>{{ $c->name }}</h2>
                            </p>
                                <div>
                                    @foreach($c->contacts as $co)
                                    <p><h3>Contactpersoon:
                                        {{ $co->firstname }} {{ $co->surename }}
                                        </h3>
                                    </p>

                                        @foreach($co->internships as $internship)
                                            <div class="well">

                                            <p>Stage:
                                                van {{ $internship->begin }} tot @if($internship->end == null) @else{{ $internship->end }} @endif
                                            </p>

                                            <p>Status:
                                                {{ $internship->status->name }} {{ $internship->contact->firstname }}
                                            </p>
                                                <a href="{{ route('internship.show', $internship->id) }}" class="btn btn-primary">Lees meer</a>
                                                <a href="{{ route('internship.edit', $internship->id) }}" class="btn btn-info">Verander</a>
                                                <a href="{{ route('internship.destroy', $internship->id) }}" data-token="{{ csrf_token() }}" class="delete btn btn-danger">verwijderen</a>
                                            </a>
                                            </div>
                                            @endforeach
                                    @endforeach
                                </div>
                            <a href="{{ route('company.show', $c->id) }}" class="btn btn-primary">Lees meer over het bedrijf</a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
