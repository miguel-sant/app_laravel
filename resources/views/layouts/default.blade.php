<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Meu título')</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    @section('sidebar')
        <div>
            <nav>
                Sidebar
            </nav>
        </div>  
    @show
    <h1>Meu layout</h1>
    @yield('content')
    <script src="/js/app.js"></script>
</body>
</html>