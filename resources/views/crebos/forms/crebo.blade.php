<div class="form-group">
    {!! Form::label('name', 'name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('number', 'number:') !!}
    {!! Form::text('number', null, ['class' => 'form-control']) !!}
</div>

<div style="visibility: hidden">
         <?php if (isset($school->id)) {
        ?>
        <input hidden name="school" value="{{$school->id}}">
        <?php
         }?>
</div>
<div class="form-group">
    {!! Form::submit('Verstuur', ['class' => 'btn btn-primary form-control']) !!}
</div>