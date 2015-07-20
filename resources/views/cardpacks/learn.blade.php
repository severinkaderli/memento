@extends('app')

@section('title')
    Cardpacks - {{$cardpack -> title}} - Learn
@stop

@section('content')
    @include('cards._single')
@stop
