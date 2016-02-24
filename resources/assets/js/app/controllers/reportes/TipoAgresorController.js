'use strict';
var TipoAgresorController = function($scope, $http, high){

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
