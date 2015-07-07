@extends('app')

@section('title')
    Register
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Registrieren</h2>
        </div>
        <div class="mdl-card__supporting-text">
        {!! Form::open()!!}

            <!-- firstname Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo ">
                {!! Form::text('firstname', null, ['class' => 'mdl-textfield__input']) !!}
                {!! Form::label('firstname', 'Vorname', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- lastname Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                {!! Form::text('lastname', null, ['class' => 'mdl-textfield__input']) !!}
                {!! Form::label('lastname', 'Name', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- email Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                {!! Form::email('email', null, ['class' => 'mdl-textfield__input']) !!}
                {!! Form::label('email', 'E-Mail', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- password Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                {!! Form::password('password', null, ['class' => 'mdl-textfield__input']) !!}
                {!! Form::label('password', 'Passwort', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- password_confirmation Textfield-->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label textfield-demo">
                {!! Form::password('password_confirmation', null, ['class' => 'mdl-textfield__input']) !!}
                {!! Form::label('password_confirmation', 'Passwort bestätigen', ['class' => 'mdl-textfield__label']) !!}
            </div>


            <!-- Registrieren Form Input -->
            <div class="form-group">
                {!! Form::submit('Registrieren', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent']) !!}
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