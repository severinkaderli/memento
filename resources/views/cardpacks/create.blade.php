@extends('app')

@section('title')
    Cardpacks - Create
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col mdl-cell--12-col-tablet mdl-cell--12-col-phone">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create cardpack</h2>
        </div>
        <div class="mdl-card__supporting-text">
            @include('errors._list')
            {!! Form::open(['url' => 'cardpacks']) !!}

            @include('cardpacks._form', ['buttonLabel' => 'Create cardpack'])

            {!! Form::close() !!}
        </div>
    </div>

@stop