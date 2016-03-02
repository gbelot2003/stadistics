<!doctype html>
<html class="no-js" lang="es" data-ng-app="adminApp">
<head>
    <title>Titulo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<header>
    <nav class="navbar navbar-inverse">
        <menu-nav></menu-nav>
    </nav>
</header>
<main class="container">
    <div class="row">
        <div class="nga-default nga-stagger nga-slide-down col-md-12" ng-view></div>
    </div>
</main>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script src="js/app/bundle.js"></script>
<script src="http://code.highcharts.com/stock/highstock.src.js"></script>
<script src="http://code.highcharts.com/maps/modules/map.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/mapdata/countries/hn/hn-all.js"></script>
</html>