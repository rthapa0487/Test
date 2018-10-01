<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brighte App</title>
        <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <script src="{{ url('js/jquery-2.2.4.min.js')}}"></script>
        <script src="{{ url('js/bootstrap.min.js')}}"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">      
    </head>
    <body>
       <div class="container">
           @yield('content')            
        </div>
    </body>
</html>
