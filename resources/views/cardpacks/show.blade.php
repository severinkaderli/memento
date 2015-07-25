@extends('app')

@section('title')
Cardpacks - {{$cardpack -> title}}
@stop

@section('content')
    <!-- delete cards button -->
    <button id="deleteCardsButton" class="fab mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
        <i class="material-icons">delete</i>
    </button>

    @include('cards._table')

    <!-- Create card form -->
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create new card</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['action' => 'CardsController@store', 'id' => 'addCardForm']) !!}
            {!! Form::hidden('cardpack_id', $cardpack->id, ['id' => 'cardpack_id']) !!}
            <!-- frontside Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::textarea('frontside', null, ['class' => 'mdl-textfield__input', 'id' => 'frontside', 'rows' => '1']) !!}
                {!! Form::label('frontside', 'Frontside', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- backside Inputfield -->
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::textarea('backside', null, ['class' => 'mdl-textfield__input', 'id' => 'backside', 'rows' => '1']) !!}
                {!! Form::label('backside', 'Backside', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Card', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'addCardpack', 'name' => 'addCardpack']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Import from CSV-File (not wroking)</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['action' => ['CardpacksController@import', $cardpack -> id], 'files' => true]) !!}
                <div class="form-group">
                    {!! Form::file('csvImport')!!}
                </div>
                <div class="mdl-layout-spacer"></div>
                <div class="form-group">
                    {!! Form::submit('Import CSV', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'importCsv', 'name' => 'importCsv']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('bodyJS')
    <script src="{{URL::asset('js/deleteCards.js')}}"></script>
    <script src="{{URL::asset('js/addCard.js')}}"></script>
@stop