@extends('master')

@section('title', 'scholen')

@section('content')

    <div class="row">
        <div class="col-md-12">
            <h2>
                <a href="{{ route('school.index') }}">Go back</a>
            </h2>
        </div>
    </div>
    <div class="row">
        <h3>
            {{ $school->name }}
        </h3>
    </div>
    @foreach ($addresses as $array)
        @foreach ($array as $address)
            <div class="row">
                <div class="col-md-5">
                    street:<br>
                    Streetnumber:<br>
                    postcode:<br>
                    state:
                </div>
                <div class="col-md-5">
                    {{ $address->street }}<br>
                    {{ $address->streetnumber }}<br>
                    {{ $address->postcode }}<br>
                    {{ $address->state }}
                </div>
                <div class="col-md-1">
                    <a href="{{ route('location.edit', $address->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
                <div class="col-md-1">
                    {!! Form::open(['route' => ['location.destroy', $address->id], 'method' => 'delete', 'class'=>'delete inline']) !!}
                    {!! Form::submit("trash", ['class' => 'btn btn-danger delete ']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        @endforeach
    @endforeach
    <div class="row">
        <h3>Teachers</h3>
        <blockquote>
            @foreach($teachers as $teacher)
                <a href="{{ Route('contact.show', $teacher->id) }}">
                    @if(isset($teacher->insertion))
                        {{ $teacher->firstname }} {{ $teacher->insertion }} {{ $teacher->surename }}
                    @else
                        {{ $teacher->firstname }} {{ $teacher->surename }}
                    @endif
                </a>
            @endforeach
        </blockquote>
    </div>

    <div class="row">
        <h3>Students</h3>
        <blockquote>
            @foreach($students as $student)
                <a href="{{ Route('contact.show', $student->id) }}">
                    @if(isset($student->insertion))
                        {{ $student->firstname }} {{ $student->insertion }} {{ $student->surename }}
                    @else
                        {{ $student->firstname }} {{ $student->surename }}
                    @endif
                </a>
            @endforeach
        </blockquote>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4>Add a location</h4>

            {!! Form::open(['route' => 'location.store']) !!}
            @include('locations.forms.location')
            {!! Form::close() !!}
        </div>
    </div>

    {{--<div class="row">
        @if($education_offers != NULL && $cohorts != NULL && $crebos != NULL)
            @foreach ($education_offers as $array)
                @foreach ($array as $education_offer)
                    @if(isset($cohorts))
                        @foreach ($cohorts as $array)
                            @foreach ($array as $cohort)
                                <div class="col-lg-3">
                                    Cohort start: <br>
                                    Cohort end:
                                </div>
                                <div class="col-lg-3">
                                    {{ $cohort->name }} <br>
                                    {{ $cohort->schoolyear }}
                                </div>
                                    @foreach ($crebos as $array)
                                        @foreach ($array as $crebo)
                                            <div class="col-lg-3">
                                                Crebo name: <br>
                                                Crebo number:
                                            </div>
                                            <div class="col-lg-3">
                                                {{ $crebo->name }}<br>
                                                {{ $crebo->number }}
                                            </div>
                                            <div class="col-lg-3">
                                                <a href="{{ route('crebo.edit', ['crebo' => $crebo->id]) }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a>
                                            </div>
                                        @endforeach
                                    @endforeach
                            @endforeach
                        @endforeach
                    @endif
                @endforeach
            @endforeach
        @else
            Make a connection here <br>
        @endif
    </div>--}}



                            {{--<td>
            <p>
                    education id:<br>
                {{ $education_offer->education_id }}
            </p>
        </td>--}}




        {{--School information above--}}

@stop

@section('content')

    <link rel="stylesheet" href="{{ asset('js/main.js') }}" type="text/css">

@stop