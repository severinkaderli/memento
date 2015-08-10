@extends("app")

@section('title')
    About
@stop

@section('breadcrumbs')
    About
@stop

@section('content')
    <div class="mdl-card mdl-shadow--2dp mdl-cell mdl-cell--12-col">
            <div class="mdl-card__supporting-text">
                <h5>What is memento?</h5>
                <p>memento is a flashcard application for the web. It was designed with mobile devices in mind.
                    That way you can learn your cards where-ever you are. memento was created with the PHP-Framework
                <a href="http://laravel.com/">Laravel</a>. The frontend was done with the help from <a href="https://github.com/google/material-design-lite">Material Design Lite</a> by Google.</p>
                <h5>Current features:</h5>
                <ul>
                    <li>Login and registering of new users</li>
                    <li>Creation, editing and deleting of cardpacks</li>
                    <li>Creation and deleting of cards</li>
                    <li>CSV-Import and CSV-Export for cards</li>
                    <li>Card-learning</li>
                </ul>
            </div>
    </div>
@stop