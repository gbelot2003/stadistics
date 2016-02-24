'use strict';
var TipoMedioController = function($scope, $http, high){

    $scope.medio = [
        {"tipo":"Medios de Comunicación Varios","dquince":0,"dcatorce":2,"dtrece":0,"ddoce":7},
        {"tipo":"Comercial (Menores, Críticos)","dquince":10,"dcatorce":0,"dtrece":15,"ddoce":11},
        {"tipo":"Radial","dquince":15,"dcatorce":19,"dtrece":1,"ddoce":4},
        {"tipo":"Televisivo","dquince":58,"dcatorce":45,"dtrece":6,"ddoce":3},
        {"tipo":"Comercial (Mega Medios)","dquince":0,"dcatorce":0,"dtrece":11,"ddoce":0},
        {"tipo":"Escrito","dquince":3,"dcatorce":3,"dtrece":0,"ddoce":1},
        {"tipo":"Periódico Digital ","dquince":1,"dcatorce":0,"dtrece":1,"ddoce":4},
        {"tipo":"Organización No Gubernamental","dquince":19,"dcatorce":7,"dtrece":8,"ddoce":4},
        {"tipo":"Radios Comunitarios","dquince":1,"dcatorce":1,"dtrece":2,"ddoce":3},
        {"tipo":"Corrresponsalia Extranjera","dquince":0,"dcatorce":0,"dtrece":2,"ddoce":2},
        {"tipo":"Medio de Comunicacion Estatal","dquince":0,"dcatorce":0,"dtrece":1,"ddoce":3},
        {"tipo":"Sistema de Cable Local","dquince":0,"dcatorce":0,"dtrece":1,"ddoce":0},
        {"tipo":"Medio de Comunicación Local","dquince":4,"dcatorce":2,"dtrece":12,"ddoce":30},
        {"tipo":"Institución Autonoma","dquince":7,"dcatorce":7,"dtrece":1,"ddoce":3},
        {"tipo":"Asociaciones Campesinas","dquince":2,"dcatorce":1,"dtrece":5,"ddoce":4},
        {"tipo":"Periodista Independiente","dquince":0,"dcatorce":1,"dtrece":2,"ddoce":2},
        {"tipo":"Personaje Mediatico","dquince":3,"dcatorce":1,"dtrece":8,"ddoce":1},
        {"tipo":"Partido Politico","dquince":4,"dcatorce":2,"dtrece":1,"ddoce":0},
        {"tipo":"Sindicatos ","dquince":7,"dcatorce":0,"dtrece":1,"ddoce":0},
        {"tipo":"Radial y Televisivo","dquince":29,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Grupo Artistico","dquince":2,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Movimiento Estudiantil","dquince":16,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Pueblo Indígena y Afrodesendiente ","dquince":4,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Ninguno","dquince":23,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Movimiento Social","dquince":16,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Periodico","dquince":3,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"tipo":"Usuarios de Internet ","dquince":1,"dcatorce":0,"dtrece":0,"ddoce":0}
    ];

    $scope.tipo = 'bar';
    $scope.size = '1000';

    $scope.chartConfig = {
        options: {
            chart: {
                type: $scope.tipo,
                height: $scope.size,
            },
            title: {text: 'Estadisticas por Tipos de Medio Agredido'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Medios de Comunicación Varios", "Comercial (Menores, Críticos)",  "Radial", "Televisivo", "Comercial (Mega Medios)", "Escrito", "Periódico Digital", "Organización No Gubernamental", "Radios Comunitarios",
                    "Corrresponsalia Extranjera", ,"Medio de Comunicacion Estatal", "Sistema de Cable Local", "Medio de Comunicación Local", "Institución Autonoma", "Asociaciones Campesinas", "Periodista Independiente",
                    "Personaje Mediatico", "Partido Politico", "Sindicatos", "Radial y Televisivo", "Grupo Artistico", "Movimiento Estudiantil", "Pueblo Indígena y Afrodesendiente", "Ninguno", "Movimiento Social", "Periodico", "Usuarios de Internet"]
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
                data: [0, 10, 15, 58, 0, 3, 1, 19, 1, 0, 0, 0, 4, 7, 2, 0, 3, 4, 7, 29, 2, 16, 4, 23, 16, 3, 1]},
            { name: 'Año 2014',
                data: [2, 0, 19, 45, 0, 3, 0, 7, 1, 0, 0, 0, 2, 7, 1, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0]},
            { name: 'Año 2013',
                data: [0, 15, 1, 6, 1, 0, 1, 8, 2, 2, 1, 1, 12, 1, 5, 2, 8, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0],
                visible: false

            },
            { name: 'Año 2012',
                data: [7, 11, 4, 3, 0, 1, 4, 4, 3, 2, 3, 0, 30, 3, 4, 2, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                visible: false
            }
        ]

    };


};
module.exports = TipoMedioController;