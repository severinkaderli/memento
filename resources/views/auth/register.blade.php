@extends('app')

@section('title')
    Register
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Register</h2>
        </div>
        <div class="mdl-card__supporting-text">
        {!! Form::open()!!}

            <!-- firstname Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::text('firstname', null, ['class' => 'mdl-textfield__input', 'id' => 'firstname']) !!}
                {!! Form::label('firstname', 'Vorname', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- lastname Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::text('lastname', null, ['class' => 'mdl-textfield__input', 'id' => 'lastname']) !!}
                {!! Form::label('lastname', 'Name', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- email Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::email('email', null, ['class' => 'mdl-textfield__input', 'id' => 'email']) !!}
                {!! Form::label('email', 'E-Mail', ['class' => 'mdl-textfield__label']) !!}
                <span class="mdl-textfield__error">Not a valid email address!</span>
            </div>

            <!-- password Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::password('password', ['class' => 'mdl-textfield__input', 'id' => 'password']) !!}
                {!! Form::label('password', 'Passwort', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- password_confirmation Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::password('password_confirmation', ['class' => 'mdl-textfield__input', 'id' => 'password_confirmation']) !!}
                {!! Form::label('password_confirmation', 'Passwort bestätigen', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <div>&nbsp;</div>

            <!-- register Submit Button -->
            <div class="form-group">
                {!! Form::submit('Register', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'register', 'name' => 'register']) !!}
            </div>
        {!! Form::close() !!}
        </div>
    </div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">What is memento?</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <p><strong><i>memento</i></strong> is a simple to use flashcard application in web. It comes in beautiful Material Design.</p>
            <p>
               <strong>Features:</strong>
                <ul>
                    <li>Learning with flashcards</li>
                    <li>CSV Import</li>
                    <li>CSV Export</li>
                 </ul>
            </p>
        </div>
    </div>


@stop