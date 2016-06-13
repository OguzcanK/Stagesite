@extends('master')

@section('title', 'scholen')

@section('content')

    <table class="table">
    <thead>
      <tr>
        <th>Scholen</th>
      </tr>
    </thead>

        <tbody>
      <tr>
          <td>
              {{ $school->name }}
          </td>
      </tr>
@foreach ($addresses as $array)
    @foreach ($array as $address)

                    <tr>
        <td>
            <p>
                street:<br>
                Streetnumber:<br>
                postcode:<br>
                state:
            </p>
        </td>
        <td>
             {{ $address->street }}<br>
            {{ $address->streetnumber }}<br>
            {{ $address->postcode }}<br>
            {{ $address->state }}
        </td>
      </tr>
        <tr>
            <td><a href="{{ route('location.edit', $address->id) }}" class="btn btn-default"><span class="glyphicon glyphicon-pencil"></span></a></td>
            @if (count($array) > 1)
            <td>
                {!! Form::open(['route' => ['location.destroy', $address->id], 'method' => 'delete', 'class'=>'delete inline']) !!}
                    {!! Form::submit("trash", ['class' => 'btn btn-danger delete ']) !!}
                {!! Form::close() !!}</td>
                @endif
        </tr>
    @endforeach
@endforeach
            <tr>
            <td>
                <h3>Add a location</h3>

                {!! Form::open(['route' => 'location.store']) !!}
                @include('locations.forms.location')
                {!! Form::close() !!}
                </td>
                @if($education_offers != NULL && $cohorts != NULL && $crebos != NULL)
                    @foreach ($education_offers as $array)
                        @foreach ($array as $education_offer)

                            <td>
            <p>
                education id:<br>
                {{ $education_offer->education_id }}
            </p>
        </td>
                            @if(isset($cohorts))
                                <td>
                                @foreach ($cohorts as $array)
                                    @foreach ($array as $cohort)
                                        <td>
                        Cohort name: <br>
                        Cohort Schoolyear:
                    </td>
                                        <td>
                        {{ $cohort->name }} <br>
                                            {{ $cohort->schoolyear }}
                    </td>
                                        @foreach ($crebos as $array)
                                            @foreach ($array as $crebo)
                                                <td>
                        Crebo name: <br>
                        Crebo number:
                    </td>
                                                <td>
                        {{ $crebo->name }}<br>
                                                    {{ $crebo->number }}
                    </td>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                @endforeach
                                {{ $cohort->name }}<br>
                                </td>
                            @endif

                        @endforeach
                    @endforeach

                @else
                    Make a connection here <br>
                @endif

        </tr>
        {{--School information above--}}

        <a href="{{ route('school.index') }}">Go back</a>
    </tbody>
  </table>

@stop

@section('content')

    <link rel="stylesheet" href="{{ asset('js/main.js') }}" type="text/css">

@stop