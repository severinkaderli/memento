@extends('app')

@section('title')
    Login
@stop

@section('content')
    <h1>Login</h1>
    {!! Form::open()!!}
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

        <!-- $Name$ checkbox-->
        <div class="form-group">
            {!! Form::checkbox('remember', 'value') !!}
            {!! Form::label('remember', 'Passwort merken:') !!}
        </div>

        <!-- Login Form Input -->
        <div class="form-group">
            {!! Form::submit('Login', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
@stop