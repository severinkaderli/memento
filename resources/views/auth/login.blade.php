@extends('app')

@section('title')
    Login
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Login</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open()!!}
    
            <!-- email Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::email('email', null, ['class' => 'mdl-textfield__input', 'id' => 'email']) !!}
                {!! Form::label('email', 'E-Mail', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- password Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::password('password', ['class' => 'mdl-textfield__input', 'id' => 'password']) !!}
                {!! Form::label('password', 'Passwort', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- $Name$ checkbox-->
            <div class="form-group">
                {!! Form::checkbox('remember', 'value') !!}
                {!! Form::label('remember', 'Passwort merken:') !!}
            </div>

            <!-- login Submit Button -->
            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'login', 'name' => 'login']) !!}
            </div>



            {!! Form::close() !!}
        </div>
    </div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">What is flashcards?</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
        </div>
    </div>
@stop