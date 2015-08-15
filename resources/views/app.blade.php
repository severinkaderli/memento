<!DOCTYPE html>
<html>
<head>
    <!-- Todo: remove demo-classes from html-file -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token" content="{{ csrf_token() }}">
    <base href="{{URL::to('/')}}">
    <!-- SEO Information -->
    <title>memento - @yield('title')</title>
    <meta name="description" content="memento is a simple web-based flashcard application in beatiful material design.">
    <meta name="keywords" content="flash, cards, memento, remember, learning, tool, material-design, material, words">
    <meta name="author" content="Severin Kaderli">
    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/material.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
    @yield('extraCSS')
    <!-- JS Files -->
    @yield('extraJS')
</head>
<body>
<div id="layoutWrapper" class="mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
    <!-- Header START -->
    <header id="header" class="mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
            <span class="mdl-layout-title">@yield('title')</span>
        </div>
    </header>
    <!-- Header END -->
    <!-- Sidebar START -->
    <div class="drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <!-- Drawer START -->
        <header class="drawer-header">
            <img id="logo" src="{{URL::asset('images/memento.png')}}" alt="Logo">

            <div class="drawer-email">
                <p>
                    @if(Auth::check())
                        Your are logged in as<br>
                        {{Auth::user() -> email}}
                    @else
                        &nbsp;
                    @endif
                </p>
            </div>
        </header>
        <!-- Drawer END -->
        <!-- Navigation START -->
        <nav id="navigation" class="mdl-navigation mdl-color--blue-grey-800">
            @if(!Auth::check())
                <a class="mdl-navigation__link" href="{{url('/')}}"><i
                            class="mdl-color-text--blue-grey-400 material-icons">people</i>Home</a>
            @else
                <a class="mdl-navigation__link" href="{{url('cardpacks')}}"><i
                            class="mdl-color-text--blue-grey-400 material-icons">dashboard</i>Cardpacks</a>
                <a class="mdl-navigation__link" href="{{url('logout')}}"><i
                            class="mdl-color-text--blue-grey-400 material-icons">people</i>Logout</a>
            @endif
            <div class="mdl-layout-spacer"></div>
            <a class="mdl-navigation__link" href="{{url('about')}}"><i
                        class="mdl-color-text--blue-grey-400 material-icons">help</i>About</a>
            <!-- Footer -->
            <div id="footer">
                <p>v0.4-alpha<br>&copy;2015 Severin Kaderli</p>
            </div>
            <!-- Footer -->
        </nav>
        <!-- Navigation END -->
    </div>
    <!-- Sidebar END -->
    <!-- Content START -->
    <main class="mdl-layout__content mdl-color--grey-100">
        <div id="contentWrapper" class="mdl-grid mdl-grid--center">
            @yield('content')
        </div>
    </main>
    <!-- Content END -->
</div>
<!-- Body JS -->
<script src="{{ URL::asset('js/jquery.min.js')}}"></script>
<script src="{{ URL::asset('js/material.min.js')}}"></script>
<!-- Todo: combine little scripts into one file and compress -->
<script src="{{ URL::asset('js/main.js') }}"></script>
<script src="{{ URL::asset('js/rest_delete.js') }}"></script>
<script src="{{ URL::asset('js/autosize.min.js') }}"></script>
<script src="{{ URL::asset('js/cardAjax.js') }}"></script>
<script>
    autosize($('textarea'));
</script>
@yield('bodyJS')
</body>
</html>