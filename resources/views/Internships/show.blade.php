@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Welcome</div>

                    <div class="panel-body">
                                            <div class="well">

                                                <p>Stage:
                                                    van {{ $internship->begin }} tot {{ $internship->end }}
                                                </p>
                                                <p>contact:
                                                    {{ $internship->contact->firstname }} {{ $internship->contact->surename }}
                                                    {{ $internship->contact->email }}
                                                </p>
                                                <p>Status:
                                                    {{ $internship->status->name }}
                                                </p>
                                                <h3>Students</h3>
                                                <blockquote>
                                                    @if($internshipcontacts != NULL)
                                                        @foreach($internshipcontacts as $internshipcontact)
                                                            <a href="{{ Route('contact.show', $internshipcontact->id) }}">
                                                                <p>{{$internshipcontact->firstname}} {{$internshipcontact->firstname}}</p>
                                                            </a>
                                                        @endforeach
                                                    @else
                                                        No students
                                                    @endif
                                                </blockquote>
                                                {!! Form::open(['route' => 'student.store']) !!}
                                                    {!! Form::hidden('internship_id',$internship->id, NULL, ['class' => 'form-control', 'required']) !!}
                                                    {!! Form::submit('Stage lopen', ['class' => 'btn btn-primary form-control ']) !!}
                                                {!! Form::close() !!}
                                            </div>

                    <div class="panel-body">
                        {!! Form::open(['url' => ['review'], 'method' => 'POST']) !!}

                        <fieldset class="col-md-8">
                            <legend>New review</legend>
                            <div class="form-group ">
                                {!! Form::label('mark', 'Cijfer:*') !!}
                                {!! Form::text('mark', NULL, ['class' => 'form-control', 'required']) !!}
                            </div>
                            <div class="form-group ">
                                {!! Form::label('review', 'review:*') !!}
                                {!! Form::textarea('review', NULL, ['class' => 'form-control', 'required']) !!}
                            </div>

                            {!! Form::hidden('internship_id',$internship->id, NULL, ['class' => 'form-control', 'required']) !!}

                        </fieldset>

                        <div class="form-group col-md-8">
                            {!! Form::submit('review toevoegen!', ['class' => 'btn btn-primary form-control ']) !!}
                        </div>
                        {!! Form::close() !!}
                    </div>
                        @if(!empty($reviews))
                            @foreach ($reviews as $array)
                                @foreach ($array as $review)
                                    <div class="well">

                            {{ $review->mark }}<br>
                                        {{ $review->review }}<br>
                            <a href="{{ route('review.edit', $review->id) }}" class="btn btn-info">Verander</a>
                            <a href="{{ route('review.destroy', $review->id) }}" data-token="{{ csrf_token() }}" class="delete btn btn-danger">verwijderen</a>
                                        </a>
                            </div>
                                @endforeach
                            @endforeach
                        @endif
                                    </div>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    </div>
@endsection
