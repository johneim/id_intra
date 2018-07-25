<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet" href="css/materialize-social.css">
    <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='css/fullcalendar.min.css' rel='stylesheet' />
    <link href='css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='js/moment.min.js'></script>
    <script src='js/jquery2-1-1.js'></script>
    <script src='js/fullcalendar.min.js'></script>
    <script src='js/app2.js'></script>
<style>
    body {
        padding: 0;
        font-family: "Lucida Grande",Helvetica,Arial,Verdana,sans-serif;
        font-size: 14px;
    }
    #calendar {
        max-width: 900px;
        margin: 0 auto;
    }
    #calendardiv
    {
        margin: 40px 10px;
    }
</style>
</head>
<body>
    @include('layouts.navbar')
    <div id="calendardiv">
        <div id='calendar'>
        </div>
    </div>
</body>
</html>