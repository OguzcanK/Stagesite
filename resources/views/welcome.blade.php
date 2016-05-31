@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    @foreach($companies as $company)
                        <div class="well">
                            <p>Bedrijf:
                            {{ $company->name }} {{ $company->phonenumber }}
                                </p>
                                @foreach($company->contacts as $contact)
                                    <p>Contactpersoon:
                                    {{ $contact->firstname }} {{ $contact->surename }}
                                    </p>
                                        @foreach($contact->internship as $internship)
                                            <p>Stage:
                                            {{ $internship->begin }} {{ $internship->end }}
                                                </p>
                                            <p>Status:
                                            {{ $internship->status->name }}
                                            </p>
                                        @endforeach
                                @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
