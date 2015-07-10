@extends('app')

@section('title')
    Cardpacks - Overview
@stop

@section('content')
    <!-- create cardpack button -->
    <a href="{{url('cardpacks/create')}}">
        <button class="createCardpack mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
           <i class="material-icons">add</i>
        </button>
    </a>
    @forelse($cardpacks as $pack)
        <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">{{ $pack -> title }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {{ $pack -> description }}
            </div>
            <button id="cardpackMenuButton{{$pack -> id}}" class="card-menu-button mdl-button mdl-js-button mdl-button--icon">
                <i class="material-icons">more_vert</i>
            </button>

            <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect"
                for="cardpackMenuButton{{$pack -> id}}">
                <a href="{{url('cardpacks/' . $pack -> id . '/edit')}}"><li class="mdl-menu__item">Edit</li></a>
                <a href="{{url('cardpacks/' . $pack -> id)}}" data-method="delete" data-token="{{csrf_token()}}" data-confirm="Are you sure?"><li class="mdl-menu__item">Delete</li></a>
                <li class="mdl-menu__item">Export as .csv</li>
            </ul>
        </div>
    @empty
        <p>You have no cardpacks yet. Create your first now.</p>
    @endforelse
@stop