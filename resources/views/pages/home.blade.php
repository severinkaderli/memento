@extends('app')

@section('title')
    Home
@stop

@section('content')
	<!-- Login card -->
    @include('errors._list')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Login</h2>
        </div>

        <div class="mdl-card__supporting-text">
            {!! Form::open(['url' => 'login'])!!}

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



            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                <input type="checkbox" name="remember" id="remember" class="mdl-checkbox__input" />
                <span class="mdl-checkbox__label">Remember Password</span>
            </label>
            <div>&nbsp;</div>

            <!-- login Submit Button -->
            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'login', 'name' => 'login']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
	
	<!-- Register card -->
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Register</h2>
        </div>

        <div class="mdl-card__supporting-text">
            {!! Form::open(['url' => 'register'])!!}

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

    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Changelog</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <h5>v0.5.1-alpha</h5>
            <ul>
                <li>Export filename</li>
                <li>Added changelog to home page</li>
            </ul>
            <h5>v0.5-alpha</h5>
            <ul>
                <li>CSS-Cleanup</li>
                <li>Added logo</li>
            </ul>
            <h5>v0.4-alpha</h5>
            <ul>
                <li>Added about page</li>
                <li>Changes to README.md</li>
                <li>Added LICENSE</li>
            </ul>
        </div>
    </div>
@stop