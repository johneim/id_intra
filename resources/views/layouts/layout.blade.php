<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/materialize-social.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>InfiniteDATA Intranet</title>
</head>
<body>
    @include('layouts.navbar')
	<div id="container">
	   
       @yield('content')

       @yield('company')

       @yield('products')

    </div>
    <script type="text/javascript" src="js/jquery2-1-1.js"></script>
    <script type="text/javascript" src="js/app2.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="js/init.js"></script>
    <script src='js/moment.min.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function(){
            $('.collapsible').collapsible();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('.parallax').parallax();
        });
    </script>
</body>
</html>