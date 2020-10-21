<html>
    <head>
        <title>Nombre de la app - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @section('barralateral')
            <h3>Esto es la barra lateral</h3>
        @show

        <div class="container">
            @yield('contenido')
        </div>
    </body>
</html>