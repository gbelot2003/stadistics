'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 1000,
            },
            title: {text: 'Estadisticas por Tipos de Sujetos Agredidos'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: ["Periodista", "Comunicador Social", "Camarógrafo", "Vocero de grupos campesinos", "Periodista independiente", "Relacionador Público", "Gerente de Medio de Comunicación", "Medio Digital", "Dueño de Medio de Comunicación",
                    "Fuente de Consulta Mediatíca", "Corresponsal Internacional", "Presentador de TV", "Locutor", "Estudiante de Periodismo", "Estudiantes", "Gremios Sociales", "Artista", "Instalaciones Físicas de Medio de Comunicación",
                    "Defensor de DDHH", "Abogados", "Líder Comunitario", "ONG/DDHH", "Religiosos", "Activista Politico", "Grupo de Periodistas", "Edificio de Medio", "Comunicador Comunitario", "Radio Comunitaria", "Fotografo"]
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
                    data: [91, 4, 3, 2, 0, 0, 0, 3, 2, 2, 2, 4, 4, 0, 15, 40, 2, 0, 16, 7, 9, 0, 0, 2, 6, 1, 1, 1, 1]
                },
                {
                    name: 'Año 2014',
                    data: [52, 11, 3, 1, 0, 0, 1, 0, 0, 0, 0, 1, 2, 0, 5, 1, 0, 0, 5, 0, 1, 1, 0, 3, 3, 0, 2, 0, 0]
                },
                {
                    name: 'Año 2013',
                    data: [29, 10, 3, 1, 1, 0, 0, 0, 2, 0, 0, 1, 0, 0, 2, 1, 1, 3, 10, 4, 3, 1, 0, 4, 0, 0, 1, 1],
                    visible: false
                },
                {
                    name: 'Año 2012',
                    data: [45, 17, 2, 3, 0, 1, 1, 1, 1, 0, 0, 2, 0, 0, 1, 2, 2, 0, 0, 2, 1, 0, 1, 3, 1, 3, 1, 0],
                    visible: false
                }
            ]

        };

};
module.exports = TipoSujetoAgredidoController;