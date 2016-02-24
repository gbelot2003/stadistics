'use strict';
var LocacionController = function($scope, $http, high){

    $scope.location = [
        {"departamentos":"Atlántida","dquince":8,"dcatorce":4,"dtrece":4,"ddoce":3},
        {"departamentos":"Colón","dquince":7,"dcatorce":5,"dtrece":7,"ddoce":8},
        {"departamentos":"Comayagua","dquince":2,"dcatorce":3,"dtrece":1,"ddoce":2},
        {"departamentos":"Copán","dquince":1,"dcatorce":2,"dtrece":3,"ddoce":1},
        {"departamentos":"Cortés","dquince":11,"dcatorce":12,"dtrece":15,"ddoce":18},
        {"departamentos":"Choluteca","dquince":6,"dcatorce":1,"dtrece":0,"ddoce":3},
        {"departamentos":"El Paraíso","dquince":1,"dcatorce":1,"dtrece":1,"ddoce":0},
        {"departamentos":"Francisco Morazán","dquince":165,"dcatorce":45,"dtrece":39,"ddoce":44},
        {"departamentos":"Gracias a Dios","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"departamentos":"Intibucá","dquince":0,"dcatorce":1,"dtrece":4,"ddoce":1},
        {"departamentos":"Islas de la Bahía","dquince":2,"dcatorce":1,"dtrece":0,"ddoce":0},
        {"departamentos":"La Paz","dquince":4,"dcatorce":3,"dtrece":0,"ddoce":0},
        {"departamentos":"Lempira","dquince":2,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"departamentos":"Ocotepeque","dquince":0,"dcatorce":0,"dtrece":1,"ddoce":1},
        {"departamentos":"Olancho","dquince":2,"dcatorce":3,"dtrece":0,"ddoce":0},
        {"departamentos":"Santa Bárbara","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":1},
        {"departamentos":"Valle","dquince":3,"dcatorce":6,"dtrece":1,"ddoce":0},
        {"departamentos":"Yoro","dquince":4,"dcatorce":4,"dtrece":2,"ddoce":0}
    ];

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 700,
            },
            title: {text: 'Estadisticas por Tipos de Medio Agredido'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Atlántida", "Colón", "Comayagua", "Copán", "Cortés", "Choluteca", "El Paraíso", "Francisco Morazán", "Gracias a Dios", "Intibucá", "Islas de la Bahía", "La Paz", "Lempira", "Ocotepeque", "Olancho",
                    "Santa Bárbara", "Valle", "Yoro"]

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
                data: [8, 7, 2, 1, 11, 6, 1, 165, 0, 0, 2, 4, 2, 0, 2, 0, 3, 4]},
            { name: 'Año 2014',
                data: [4, 5, 3, 2, 12, 1, 1, 45, 0, 1, 1, 3, 0, 0, 3, 0, 6, 4]},
            { name: 'Año 2013',
                data: [4, 7, 1, 3, 15, 0, 1, 39, 0, 4, 0, 0, 0, 1, 0, 0, 1, 2],
                visible: false
            },
            { name: 'Año 2012',
                data: [3, 8, 2, 1, 18, 3, 0, 44, 0, 1, 0, 0, 0, 1, 0, 1, 0, 0],
                visible: false
            }
        ]

    };

};
module.exports = LocacionController;