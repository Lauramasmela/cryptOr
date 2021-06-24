<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>cryptOr</title>
    <!-- Styles -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">

</head>
<body>
<div>
    @include('monnaies.navbar')
    <div class="container">
        @include('monnaies.flash')
        @yield('content')
    </div>
</div>
<footer>
    Copyright 2020 cryptOr
</footer>
</body>
</html>
