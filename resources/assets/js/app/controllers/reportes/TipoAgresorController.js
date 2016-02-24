'use strict';
var TipoAgresorController = function($scope, $http, high){

    $scope.agresor = [
        {"agresor":"Civil Identificado","dquince":21,"dcatorce":8,"dtrece":5,"ddoce":13},
        {"agresor":"Empresa Privada","dquince":5,"dcatorce":0,"dtrece":1,"ddoce":1},
        {"agresor":"Alcalde Municipal","dquince":7,"dcatorce":10,"dtrece":2,"ddoce":6},
        {"agresor":"Guardias Seguridad Edificio Estatal","dquince":1,"dcatorce":0,"dtrece":2,"ddoce":1},
        {"agresor":"Tribunal de Justicia","dquince":0,"dcatorce":1,"dtrece":2,"ddoce":3},
        {"agresor":"Autoridades del Sistema Educativo Publico ","dquince":21,"dcatorce":7,"dtrece":1,"ddoce":1},
        {"agresor":"Presidente de la República","dquince":9,"dcatorce":9,"dtrece":1,"ddoce":1},
        {"agresor":"Policía Municipal","dquince":1,"dcatorce":1,"dtrece":0,"ddoce":1},
        {"agresor":"Civil no identificado (Desconocido)","dquince":48,"dcatorce":26,"dtrece":28,"ddoce":35},
        {"agresor":"Dueño o Gerente de Medio de Comunicacion","dquince":0,"dcatorce":0,"dtrece":4,"ddoce":5},
        {"agresor":"Guardaespaldas ","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Funcionario Publico","dquince":0,"dcatorce":9,"dtrece":9,"ddoce":5},
        {"agresor":"Compañías Mineras","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":1},
        {"agresor":"Secretarias de Estado","dquince":3,"dcatorce":1,"dtrece":7,"ddoce":0},
        {"agresor":"Policías y Militares","dquince":24,"dcatorce":9,"dtrece":11,"ddoce":10},
        {"agresor":"Diputado CN","dquince":1,"dcatorce":3,"dtrece":1,"ddoce":3},
        {"agresor":"Sicarios","dquince":1,"dcatorce":0,"dtrece":2,"ddoce":1},
        {"agresor":"Diputado/a","dquince":6,"dcatorce":1,"dtrece":0,"ddoce":0},
        {"agresor":"Jefe de Redacción ","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Presentador","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Medio de Comunicación","dquince":0,"dcatorce":1,"dtrece":2,"ddoce":0},
        {"agresor":"Policia","dquince":25,"dcatorce":3,"dtrece":0,"ddoce":0},
        {"agresor":"ONGs","dquince":0,"dcatorce":2,"dtrece":0,"ddoce":0},
        {"agresor":"Operador de Medio de Comunicación ","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Miembro del Consejo","dquince":1,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"CONATEL","dquince":7,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Ciudadano","dquince":14,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Embajador","dquince":2,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Docentes ","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Guardia de seguridad","dquince":3,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Cibernauta","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Ministro de Trabajo","dquince":1,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Exprimiera Dama","dquince":1,"dcatorce":0,"dtrece":0,"ddoce":0},
        {"agresor":"Empresarios","dquince":0,"dcatorce":0,"dtrece":0,"ddoce":0}
    ];

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'bar',
                height: 1000,
            },
            title: {text: 'Estadisticas por Tipos de Agresor'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Civil Identificado", "Empresa Privada", "Alcalde Municipal", "Guardias Seguridad Edificio Estatal", "Tribunal de Justicia", "Autoridades del Sistema Educativo Publico", "Presidente de la República",
                    "Policía Municipal", "Civil no identificado (Desconocido)", "Dueño o Gerente de Medio de Comunicación", "Guardaespaldas", "Funcionario Publico", "Compañías Mineras", "Secretarias de Estado",
                    "Policías y Militares", "Diputado CN", "Sicarios", "Diputado/a", "Jefe de Redacción", "Presentador", "Medio de Comunicación", "Policia", "ONGs", "Operador de Medio de Comunicación", "Miembro del Consejo",
                    "CONATEL", "Ciudadano", "Embajador", "Docentes", "Guardia de seguridad", "Cibernauta", "Ministro de Trabajo", "Exprimiera Dama", "Empresarios"]
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
                data: [21, 5, 7, 1, 0, 21, 9, 1, 48, 0, 0, 0, 0, 3, 24, 1, 1, 6, 0, 0, 0, 25, 0, 0, 1, 7, 14, 2, 0, 3, 0, 1, 1, 0]},

            { name: 'Año 2014',
                data: [8, 0, 10, 0, 1, 7, 9, 1, 26, 0, 0, 9, 0, 1, 9, 3, 0, 1, 0, 0, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0]},
            { name: 'Año 2013',
                data: [5, 1, 2, 2, 2, 1, 1, 0, 28, 4, 0, 9, 0, 7, 11, 1, 2, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                visible: false
            },
            { name: 'Año 2012',
                data: [13, 1, 6, 1, 3, 1, 1, 1, 35, 5, 0, 5, 1, 0, 10, 3, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0],
                visible: false
            }
        ]

    };

};
module.exports = TipoAgresorController;
