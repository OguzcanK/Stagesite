@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach($company as $c)
                        <div class="well">
                            <p>Contactpersoon:
                                {{ $c->name }}
                            </p>
                                <div class="well">
                                    @foreach($c->contacts as $co)
                                    <p>bedrijf:
                                        {{ $co->firstname }} {{ $co->surename }}
                                    </p>

                                        @foreach($co->internships as $internship)
                                            <p>Stage:
                                                van {{ $internship->begin }} tot {{ $internship->end }}
                                            </p>

                                            <p>Status:
                                                {{ $internship->status->name }}
                                            </p>
                                            @endforeach
                                    @endforeach
                                </div>

                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
