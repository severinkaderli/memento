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
                    {{$card->frontside}}
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
                    {{$card->backside}}
                </div>
                <div class="mdl-card__actions mdl-card--border">
                    <a class="flipCardTrigger mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Flip Card</a>
                    <a id="nextCard"
                       data-cardNumber="{{$cardnumber}}"
                       data-finished="{{implode(',', $finished)}}"
                       data-cardId="{{$card->id}}"
                       data-cardpackId="{{$cardpack ->id}}"
                       data-numberofcards="{{$numberOfCards}}"
                       class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Next Card</a>
                </div>
            </div>
        </div>
    </div>
@stop
