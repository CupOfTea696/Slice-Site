<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" id="Slice">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>{{ config('app.name', '/Slice/') }}</title>
    
    <script src="/assets/js/prism.js" defer></script>
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/prism.css">
    <style>
        #app {
            padding-top: 64px;
            min-height: 100vh;
        }
        .card pre {
            margin: 0;
        }
    </style>
</head>
<body class="{{ '@' . $app->router->currentRouteName() }}">
    <div id="app" class="d-flex flex-column justify-content-between">
        @yield('content')
        <footer class="bg-light mt-5 py-4">
            <div class="container">
                <small>&copy;{{ now()->year }} by <a href="http://tiny.cc/cot696" target="_blank">CupOfTea</a></small>
            </div>
        </footer>
    </div>
</body>
</html>
