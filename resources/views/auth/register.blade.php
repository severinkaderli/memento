@extends('app')

@section('title')
    Register
@stop

@section('content')
    <h1>Registrieren</h1>
    {!! Form::open()!!}
        <!-- firstname Textfield-->
        <div class="form-group">
            {!! Form::label('firstname', 'Vorname:') !!}
            {!! Form::text('firstname', null, ['class' => 'form-control']) !!}
        </div>
        <!-- lastname Textfield-->
        <div class="form-group">
            {!! Form::label('lastname', 'Name:') !!}
            {!! Form::text('lastname', null, ['class' => 'form-control']) !!}
        </div>

        <!-- email Textfield-->
        <div class="form-group">
            {!! Form::label('email', 'E-Mail:') !!}
            {!! Form::email('email', null, ['class' => 'form-control']) !!}
        </div>

        <!-- password Textfield-->
        <div class="form-group">
            {!! Form::label('password', 'Passwort:') !!}
            {!! Form::password('password', null, ['class' => 'form-control']) !!}
        </div>

        <!-- password_confirmation Password Textfield-->
        <div class="form-group">
            {!! Form::label('password_confirmation', 'Passwort bestätigen:') !!}
            {!! Form::password('password_confirmation', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Registrieren Form Input -->
        <div class="form-group">
            {!! Form::submit('Registrieren', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
@stop