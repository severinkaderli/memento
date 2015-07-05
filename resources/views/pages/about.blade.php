@extends("app")

@section('title')
    About
@stop

@section('content')
    My name's {{ $first }} {{ $last }}.

    <h2>Names</h2>
    <ul>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach
    </ul>
@stop