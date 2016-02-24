'use strict';
var AgresionesIndirectasController = function($scope, $http, high){
    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 600,
            },
            title: {text: 'Estadisticas por Agresiones Indirectas'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Acciones Legales", "Agresiones Indirectas", "Criminalización"]
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
            { name: 'Año 2015',
                data: [42, 39, 12]},
            { name: 'Año 2014',
                data: [11, 18, 0]},
            { name: 'Año 2013',
                data: [14, 11, 0]},
            { name: 'Año 2012',
                data: [12, 17, 0]}
        ]

    };
};

module.exports = AgresionesIndirectasController;
