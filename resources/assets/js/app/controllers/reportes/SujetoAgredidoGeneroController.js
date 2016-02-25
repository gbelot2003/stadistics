'use strict';
var SujetoAgredidoGeneroController = function($scope, $http, high){

    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 600,
            },
            title: {text: 'Estadisticas por Agresiones Indirectas'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Hombres", "Mujeres", "LGTBI", "N/A (Edificios)"]
            },
            style: {
                fontSize: '20px',
                fontFamily: 'proxima-nova,helvetica,arial,sans-seri',
                whiteSpace: 'nowrap',
                paddingLeft: '10px',
                paddingRight: '10px',
                paddingTop: '10px',
                paddingBottom: '10px'
            },
            plotOptions: {
                series: {
                    pointWidth: 10
                },
                bar: {
                    groupPadding: 0,
                    pointPadding: 0,
                    dataLabels: {
                        enabled: false
                    }
                }
            },

            yAxis: {
                title: {
                    text: 'Conteo de Agresiones'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'top',
                x: -40,
                y: 80,
                floating: true,
                borderWidth: 1,
                backgroundColor: ((Highcharts.theme && Highcharts.theme.legendBackgroundColor) || '#FFFFFF'),
                shadow: true
            },

            credits: {enabled: true},
        },

        series: [
            {
                name: 'Año 2015',
                data: [115, 27, 2, 74]
            },
            {
                name: 'Año 2014',
                data: [58, 9, 1, 20]
            },
            {
                name: 'Año 2013',
                data: [50, 10, 0, 18]
            },
            {
                name: 'Año 2012',
                data: [49, 11, 1, 21]
            }
        ]

    };

    $scope.getData = function($year){
        $http.get('api/reportes/sujeto-agredido-por-genero/' + $year).success(function(data){

            $scope.datos = data;

            $scope._total = 0;
            $scope.datos.forEach(function(e){
                $scope._total += e.total;
            });
        });
    };

    $scope.getData(2015);
};
module.exports = SujetoAgredidoGeneroController;