'use strict';
var OcurrenciaMensualController = function($scope, $http, high){

    $scope.meses = [
        {"meses":"Enero","dquince":11,"dcatorce":4,"dtrece":6,"ddoce":7},
        {"meses":"Febrero","dquince":11,"dcatorce":4,"dtrece":5,"ddoce":8},
        {"meses":"Marzo","dquince":22,"dcatorce":4,"dtrece":1,"ddoce":12},
        {"meses":"Abril","dquince":11,"dcatorce":7,"dtrece":7,"ddoce":6},
        {"meses":"Mayo","dquince":17,"dcatorce":7,"dtrece":3,"ddoce":6},
        {"meses":"Junio","dquince":26,"dcatorce":8,"dtrece":11,"ddoce":7},
        {"meses":"Julio","dquince":32,"dcatorce":4,"dtrece":10,"ddoce":7},
        {"meses":"Agosto","dquince":20,"dcatorce":7,"dtrece":6,"ddoce":10},
        {"meses":"Septiembre","dquince":16,"dcatorce":7,"dtrece":11,"ddoce":6},
        {"meses":"Octubre","dquince":19,"dcatorce":10,"dtrece":8,"ddoce":7},
        {"meses":"Noviembre","dquince":23,"dcatorce":17,"dtrece":7,"ddoce":3},
        {"meses":"Diciembre","dquince":10,"dcatorce":12,"dtrece":3,"ddoce":1}
    ];

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 700,
            },
            title: {text: 'Estadisticas por Ocurrencias Menusales'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"]

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
                data: [11, 11, 22, 11, 17, 26, 32, 20, 16, 19, 23, 10]},
            { name: 'Año 2014',
                data: [4, 4, 4, 7, 7, 8, 4, 7, 7, 10, 17, 12]},
            { name: 'Año 2013',
                data: [6, 5, 1, 7, 3, 11, 10, 6, 11, 8, 7, 3]},
            { name: 'Año 2012',
                data: [7, 8, 12, 6, 6, 7, 7, 10, 6, 7, 3, 1]}
        ]

    };

};
module.exports = OcurrenciaMensualController;