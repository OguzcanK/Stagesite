<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'name'])

<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>
@include('errors.validateError', ['errorName' => 'description'])

<div class="form-group">
    {!! Form::submit('Submit', array('class' => 'btn btn-primary form-control')) !!}
</div>