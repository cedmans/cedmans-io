<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="{{ elixir('css/app.css') }}" />

        <title>@yield('title', 'Cedmans.IO')</title>
    </head>
    <body>
        <div id="app" v-cloak class="no-js">
            @yield('content')
        </div>

        <script>
            window.Laravel = { csrfToken: '{{ csrf_token() }}'};
        </script>
        <script type="text/javascript" src="{{ elixir('js/app.js') }}"></script>
    </body>
</html>
