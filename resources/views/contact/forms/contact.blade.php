<div class="form-group">
    {!! Form::label('firstname', 'Firstname:') !!}
    {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'firstname'])

<div class="form-group">
    {!! Form::label('insertion', 'Insertion:') !!}
    {!! Form::text('insertion', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('surename', 'Surename:') !!}
    {!! Form::text('surename', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'surename'])

<div class="form-group">
    {!! Form::label('email', 'E-mail:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::label('phonenumber', 'Phone number:') !!}
    {!! Form::text('phonenumber', null, ['class' => 'form-control']) !!}
</div>


<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}
</div>