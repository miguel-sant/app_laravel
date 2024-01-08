<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu título')</title>

    <link rel="stylesheet" href="{{ mix('/css/app.css') }}">
    @stack('styles')
</head>
<body>
<h1>Meu layout</h1>
    @section('sidebar')
        <div>
            <nav>
                Sidebar teste
            </nav>
        </div>  
    @show

    <div>
    @yield('content')
    </div>

    <script src="{{ mix('/js/app.js') }}"></script>
    @stack('scripts')

</body>
</html>