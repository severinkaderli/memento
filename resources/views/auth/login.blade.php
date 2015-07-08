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



            <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="remember">
                <input type="checkbox" name="remember" id="remember" class="mdl-checkbox__input" />
                <span class="mdl-checkbox__label">Passwort merken</span>
            </label>
            <div>&nbsp;</div>

            <!-- login Submit Button -->
            <div class="form-group">
                {!! Form::submit('Login', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'login', 'name' => 'login']) !!}
            </div>



            {!! Form::close() !!}
        </div>
    </div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">memento News</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <p><strong>Version: v0.1-alpha</strong></p>
            <p><strong>Upcoming features:</strong></p>
            <ul>
                <li>Home site</li>
                <li>Cardpack creation</li>
            </ul>
        </div>
    </div>
@stop