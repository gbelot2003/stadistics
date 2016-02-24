'use strict';
var AgresionesDirectasController = function($scope, $http, high){

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 800,
            },
            title: {text: 'Estadisticas por Agresiones Directas'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Asesinato", "Atentado", "Daño Moral", "De Afectación sicologica", "De Afectación física y material"]
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
                data: [18, 6, 10, 69, 24]},
            { name: 'Año 2014',
                data: [14, 3, 1, 28, 16]},
            { name: 'Año 2013',
                data: [5, 4, 1, 27, 13]},
            { name: 'Año 2012',
                data: [10, 4, 2, 29, 12]}
        ]

    };

};

module.exports = AgresionesDirectasController;
