<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <base href="{{URL::to('/')}}">
        <title>memento - @yield('title')</title>
        <meta name="description" content="Web-Flashcards">
        <meta name="_token" content="{{ csrf_token() }}"/>
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
                    <span class="mdl-layout-title">@yield('title')</span>
                </div>
            </header>
            <!-- Header END -->
            <!-- Navigation START -->
            <div class="drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
                <header class="drawer-header">

                    <div class="drawer-email">
                        <span style="font-size:3.5em;font-weight:bold;font-style:italic;">memento</span>
                        @if(Auth::check())
                            {{Auth::user() -> email}}
                        @endif
                    </div>
                </header>
                <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
                    @if(!Auth::check())
                        <a class="mdl-navigation__link" href="{{url('/')}}"><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Home</a>
                    @else
                        <a class="mdl-navigation__link" href="{{url('cardpacks')}}"><i class="mdl-color-text--blue-grey-400 material-icons">dashboard</i>Cardpacks</a>
                        <a class="mdl-navigation__link" href="{{url('logout')}}"><i class="mdl-color-text--blue-grey-400 material-icons">people</i>Logout</a>
                    @endif

                    <!--TODO add about site-->
                    <div class="mdl-layout-spacer"></div>
                        <span class="mdl-navigation__link">memento v0.1-alpha</span>
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
        <script src="{{ URL::asset('js/jquery-2.1.4.min.js')}}"></script>
        <script src="https://storage.googleapis.com/code.getmdl.io/1.0.0/material.min.js"></script>
        <script src="{{ URL::asset('js/rest_delete.js') }}"></script>
        <script src="{{ URL::asset('js/autosize.min.js') }}"></script>
        <script src="{{ URL::asset('js/cardAjax.js') }}"></script>
        <script>
            autosize($('textarea'));
        </script>
        @yield('bodyJS')
    </body>
</html>