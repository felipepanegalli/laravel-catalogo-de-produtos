<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{Html::style('css/bootstrap.min.css')}}
</head>
<body>
<div class="container">
    @yield('content')
</div>
{{Html::script('js/jquery-3.4.1.min.js')}}
{{Html::script('js/bootstrap.min.js')}}
{{Html::script('js/inits.js')}}
</body>
</html>
