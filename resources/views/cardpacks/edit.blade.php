@extends('app')

@section('title')
    Cardpacks - Edit
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--6-col">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create cardpack</h2>
        </div>
        <div class="mdl-card__supporting-text">
            @include('errors._list')
            {!! Form::model($cardpack, ['method' => 'PATCH', 'action' => ['CardpacksController@update', $cardpack -> id]]) !!}

            @include('cardpacks._form', ['buttonLabel' => 'Edit cardpack'])

            {!! Form::close() !!}
        </div>
    </div>

@stop