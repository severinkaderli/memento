@extends('app')

@section('title')
    Cardpack - Create
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create cardpack</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['url' => 'cardpacks']) !!}

            <!-- title Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::text('title', null, ['class' => 'mdl-textfield__input', 'id' => 'title']) !!}
                {!! Form::label('title', 'Title', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- description Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::textarea('description', null, ['class' => 'mdl-textfield__input', 'id' => 'description']) !!}
                {!! Form::label('description', 'Description', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- addCardpack Submit Button -->
            <div class="form-group">
                {!! Form::submit('Create cardpack', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'addCardpack', 'name' => 'addCardpack']) !!}
            </div>

            {!! Form::close() !!}
        </div>
    </div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Import from CSV</h2>
        </div>
        <div class="mdl-card__supporting-text">
            not working yet!
        </div>
    </div>

@stop