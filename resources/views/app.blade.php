<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>@yield('title')</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <style>
            #wrapper {
                width: 960px;
                margin: 0 auto;
                border: 1px solid black;
                padding: 10px;
            }
        </style>
    </head>
    <body>
        <div id="wrapper">
            @yield('content')
        </div>
    </body>
</html>