@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create a new Internship</div>

                    <div class="panel-body">
                        {!! Form::model($internship, ['route' => ['internship.update', $internship->id], 'method' => 'put']) !!}

                        <fieldset class="col-md-5">
                            <legend>persoonlijke gegevens</legend>
                            <div class="form-group ">
                                {!! Form::label('begin', 'Begindatum:*') !!}
                                {!! Form::Date('begin', null, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('end', 'Einddatum:') !!}
                                {!! Form::Date('end', null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Status', 'Status:') !!}
                                {!! Form::select('status_id', $statusArray, null, ['class' => 'form-control']) !!}
                            </div>
                            <div class="form-group">
                                {!! Form::label('Contactpersoon', 'Contactpersoon:') !!}
                                {!! Form::select('contact_id', $contactArray, null, ['class' => 'form-control']) !!}
                            </div>
                        </fieldset>


                        <div class="form-group col-md-12">
                            {!! Form::submit('stage aanpassen!', ['class' => 'btn btn-primary form-control ']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
