<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel-mix</title>

    <link rel="stylesheet" href="{{ url(mix('bootstrap/bootstrap.css'))}}">
    <link rel="stylesheet" href="{{ url(mix('site/css/style.css')) }}">

</head>
<body>
    <h1>Hello, Laravel-mix!!!</h1>
    
    

    <script src="{{ url(mix('jquery/jquery.js')) }}"></script>
    <script src="{{ url(mix('bootstrap/bootstrap.js')) }}"></script>
    <script src="{{ url(mix('site/js/script.js')) }}"></script> {{--Meu js!--}}
</body>
</html>