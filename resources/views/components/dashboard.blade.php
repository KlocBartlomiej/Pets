<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-Ua-Compatible" content="IE=edge,chrome=1">
        <title>{{ $title }}</title>
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        @include('components.nav')
        <div id="container">
            <h1>Welcome to the {{ config('app.name') }} client :D</h1>
            {{ $slot }}
        </div>
        <div style="clear: both;"></div>
    </body>
</html>
