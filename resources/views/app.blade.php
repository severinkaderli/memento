<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>memento - @yield('title')</title>
        <meta name="description" content="Web-Flashcards">
        <link href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&amp;lang=en" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <!--CSS here -->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/material.min.css')}}" />
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/styles.css')}}">
    </head>
    <body>
        <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
            <!-- Header START -->
            <header class="demo-header mdl-layout__header mdl-color--white mdl-color--grey-100 mdl-color-text--grey-600">
                <div class="mdl-layout__header-row">
                    <span class="mdl-layout-title"><strong><i>memento</i></strong> - @yield('title')</span>
                    <div class="mdl-layout-spacer"></div>
                    <!--<div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                        <label class="mdl-button mdl-js-button mdl-button--icon" for="search">
                            <i class="material-icons">search</i>
                        </label>
                        <div class="mdl-textfield__expandable-holder">
                            <input class="mdl-textfield__input" type="search" id="search" />
                            <label class="mdl-textfield__label" for="search">Enter your query...</label>
                        </div>
                    </div>-->
                </div>
            </header>
            <!-- Header END -->
            <!-- Navigation START -->
            <div class="drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="drawer-header">
                    @if(Auth::check())
                    <img src="http://gravatar.com/avatar/{{md5(strtolower(trim(Auth::user() -> email)))}}s=100" class="demo-avatar">
                    @else
                        <img src="http://gravatar.com/avatar/000" class="demo-avatar">
                    @endif
                    <div class="drawer-email">
                        @if(Auth::check())
                            {{Auth::user() -> email}}
                        @endif
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    @if(!Auth::check())
                        <a class="mdl-navigation__link" href="{{url('register')}}"><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Register</a>
                        <a class="mdl-navigation__link" href="{{url('login')}}"><i class="mdl-color-text--blue-grey-400 material-icons">perm_identity</i>Login</a>

                    @else
                        <a class="mdl-navigation__link" href="{{url('cardpacks')}}"><i class="mdl-color-text--blue-grey-400 material-icons">dashboard</i>Cardpacks</a>
                        <a class="mdl-navigation__link" href="{{url('logout')}}"><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Logout</a>
                    @endif
                        <div class="mdl-layout-spacer"></div>
                        <a class="mdl-navigation__link" href="{{url('about')}}"><i class="mdl-color-text--blue-grey-400 material-icons">perm_identity</i>About</a>
                        <a class="mdl-navigation__link" href="{{url('contact')}}"><i class="mdl-color-text--blue-grey-400 material-icons">perm_identity</i>Contact</a>
                </nav>
            </div>
            <!-- Navigation END -->
            <!-- Content START -->
            <main class="mdl-layout__content mdl-color--grey-100">
                <div class="mdl-grid demo-content">
                    @yield('content')
                </div>
            </main>
            <!-- Content END -->
        </div>
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
    </body>
</html>