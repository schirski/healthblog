<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Health Blog')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="/css/app.css" rel="stylesheet" type="text/css">
        <script src="/js/app.js"></script>
    </head>
    <body>
       <div class="container"> 
            @include('inc.navbar')
            @include('inc.messages')
            <div class="mt-3">
                @yield('content')      
            </div>
        </div> 
    </body>
</html>
