@extends('app')

@section('title')
    Cardpacks - {{$cardpack -> title}} - Learn
@stop

@section('content')
    <div class="flipContainer">
        <div class="flipCard mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
            <!--Frontside-->
            <div class="frontside">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Card {{$cardnumber}}/{{$numberOfCards}}</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    frton: {{$card->frontside}}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="flipCardTrigger mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Flip Card</a>
                </div>
            </div>
            <!--Backside-->
            <div class="backside">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Card {{$cardnumber}}/{{$numberOfCards}}</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    back: {{$card->backside}}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    {!! Form::open(['action' => ['CardpacksController@learn', $cardpack->id]]) !!}
                    {!! Form::hidden('card_id', $card->id) !!}
                    {!! Form::hidden('cardnumber', $cardnumber) !!}
                    {!! Form::hidden('finished', implode(',', $finished)) !!}
                    {!! Form::submit('Next', ['class' => 'mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect', 'id' => 'nextCard', 'name' => 'nextCard']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@stop

@section('bodyJS')
    <script>
        $('.flipCardTrigger').click(function() {
            $(this).parents('.flipCard').toggleClass('flipped');
        });
    </script>

@stop