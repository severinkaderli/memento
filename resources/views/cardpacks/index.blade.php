@extends('app')

@section('title')
    Cardpack - Overview
@stop

@section('content')
    <h1>Cardpacks</h1>
    @foreach($cardpacks as $pack)
        Pack: {{ $pack->title }} <br>
    @endforeach
@stop