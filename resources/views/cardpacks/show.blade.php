@extends('app')

@section('title')
    Cardpacks - {{$cardpack -> title}}
@stop

@section('content')
    <!-- play cardpack button -->
    <a href="{{url('cardpacks/create')}}">
        <button class="fab mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">delete</i>
        </button>
    </a>
    <div class="table-wrapper">
        <table class="mdl-data-table mdl-js-data-table mdl-data-table--selectable mdl-cell mdl-cell--12-col mdl-shadow--2dp full-width">
            <thead>
            <tr>
                <th class="mdl-data-table__cell--non-numeric">Frontside</th>
                <th class="mdl-data-table__cell--non-numeric">Backside</th>
            </tr>
            </thead>
            <tbody>
            @foreach($cardpack -> cards as $card)
                <tr>
                    <td class="mdl-data-table__cell--non-numeric">{{$card -> frontside}}</td>
                    <td class="mdl-data-table__cell--non-numeric">{{$card -> backside}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <!-- Create card form -->
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create new card</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['action' => ['CardsController@store', $cardpack -> id]]) !!}
            <!-- frontside Inputfield -->
            <div class="mdl-textfield left mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::textarea('frontside', null, ['class' => 'mdl-textfield__input', 'id' => 'frontside', 'rows' => '1']) !!}
                {!! Form::label('frontside', 'Frontside', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <!-- backside Inputfield -->
            <div class="mdl-textfield right mdl-js-textfield mdl-textfield--floating-label">
                {!! Form::textarea('backside', null, ['class' => 'mdl-textfield__input', 'id' => 'backside', 'rows' => '1']) !!}
                {!! Form::label('backside', 'Backside', ['class' => 'mdl-textfield__label']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create Card', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'addCardpack', 'name' => 'addCardpack']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>


@stop