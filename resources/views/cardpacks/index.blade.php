@extends('app')

@section('title')
    Cardpacks
@stop

@section('content')
    <!-- create cardpack button -->
    <a class="fab mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="{{url('cardpacks/create')}}">
           <i class="material-icons">add</i>
    </a>
    @forelse($cardpacks as $pack)
        <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">{{ $pack -> title }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {{ $pack -> description }}
            </div>
            <div class="mdl-layout-spacer"></div>
            <div class="mdl-card__actions mdl-card--border">
                <a href="{{url('cardpacks/' . $pack -> id . '/learn')}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Learn</a>
                <a href="{{url('cardpacks/' . $pack -> id)}}" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Edit Cards</a>
            </div>

            <!-- Menu button -->
            <button id="cardpackMenuButton{{$pack -> id}}" class="card-menu-button mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <!-- Card menu -->
            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="cardpackMenuButton{{$pack -> id}}">
                <li class="mdl-menu__item">
                    <a href="{{url('cardpacks/' . $pack -> id . '/edit')}}">Edit</a>
                </li>
                <li class="mdl-menu__item">
                    <a href="{{url('cardpacks/' . $pack -> id)}}"
                       data-method="delete"
                       data-token="{{csrf_token()}}"
                       data-confirm="Are you sure?">Delete</a>
                </li>
                <li class="mdl-menu__item">
                    <a target="_blank" href="{{url('cardpacks/' . $pack -> id . '/export')}}">Export as CSV</a>
                </li>
            </ul>
        </div>
    @empty
        <p>You have no cardpacks yet. Create your first now.</p>
    @endforelse
@stop