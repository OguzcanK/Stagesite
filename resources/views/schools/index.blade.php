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
                @foreach($schools as $school)

            <tr>
                <td>
                   {{ $school->name }}
                    <div>
                    <a href="{{ route('school.show', $school->id)}}" class="btn btn-link">Show more</a>
                    <a href="{{ route('school.edit', $school->id) }}" class="btn btn-default"> <span class="glyphicon glyphicon-pencil"></span></a>
                        {!! Form::open(['route' => ['school.destroy', $school->id], 'method' => 'delete', 'class'=>'delete inline']) !!}
                            {!! Form::submit("trash", ['class' => 'btn btn-danger delete ']) !!}
                        {!! Form::close() !!}
                    </div>

                    {{--<a href="{{ route('school.destroy', $school->id) }}" data-token="{{ csrf_token() }}" class="btn btn-danger destroy">Delete</a>--}}
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>

@stop