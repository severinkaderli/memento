@extends('app')

@section('title')
    Cardpacks - {{$cardpack -> title}} - Learning
@stop

@section('content')
    <!-- Create card form -->
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Learning</h2>
        </div>
        <div class="mdl-card__supporting-text">
            Frontside: {{$card->frontside}}<br>
            Backside: {{$card->backside}}<br>
            {!! Form::open(['action' => ['CardpacksController@learn', $cardpack->id]]) !!}
            <div class="form-group">
                {!! Form::hidden('card_id', $card->id) !!}
                {!! Form::hidden('finished', implode(',', $finished)) !!}
                {!! Form::submit('Next', ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent', 'id' => 'nextCard', 'name' => 'nextCard']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>



@stop