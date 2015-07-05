@extends('app')

@section('title')
    Cardpack - Create
@stop

@section('content')
    <h1>Create Cardpack</h1>
    {!! Form::open(['url' => 'cardpacks']) !!}
        <!-- Textfield-->
        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <!-- description Textfield-->
        <div class="form-group">
            {!! Form::label('description', 'Beschreibung:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Add Cardpack Form Input -->
        <div class="form-group">
            {!! Form::submit('Add Cardpack', ['class' => 'btn btn-primary form-control']) !!}
        </div>

    {!! Form::close() !!}
@stop