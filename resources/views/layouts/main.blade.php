<html>
    <head>
        <title>应用名称 - @yield('title')</title>
    </head>
    <body>
        <div class="container">
            {{$name}}
        </div>

         @section('sidebar')
        @show

        <div>
        @section('content')
        @show
        </div>
    </body>
</html>