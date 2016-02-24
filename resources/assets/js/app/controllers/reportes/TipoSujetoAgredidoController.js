'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    $scope.sujetos =
        [
            {"name":"Periodista","dquince":91,"dcatorcer":52,"dtrece":29,"ddoce":45},
            {"name":"Comunicador Social","dquince":4,"dcatorcer":11,"dtrece":10,"ddoce":17},
            {"name":"Camarógrafo","dquince":3,"dcatorcer":3,"dtrece":3,"ddoce":2},
            {"name":"Vocero de grupos campesinos","dquince":2,"dcatorcer":1,"dtrece":1,"ddoce":3},
            {"name":"Periodista independiente","dquince":0,"dcatorcer":0,"dtrece":1,"ddoce":0},
            {"name":"Relacionador Público","dquince":0,"dcatorcer":0,"dtrece":0,"ddoce":1},
            {"name":"Gerente de Medio de Comunicación","dquince":0,"dcatorcer":1,"dtrece":0,"ddoce":1},
            {"name":"Medio Digital","dquince":3,"dcatorcer":0,"dtrece":0,"ddoce":1},
            {"name":"Dueño de Medio de Comunicación","dquince":2,"dcatorcer":0,"dtrece":2,"ddoce":1},
            {"name":"Fuente de Consulta Mediatíca","dquince":2,"dcatorcer":0,"dtrece":0,"ddoce":0},
            {"name":"Corresponsal Internacional","dquince":2,"dcatorcer":0,"dtrece":0,"ddoce":0},
            {"name":"Presentador de TV","dquince":4,"dcatorcer":1,"dtrece":1,"ddoce":2},
            {"name":"Locutor","dquince":4,"dcatorcer":2,"dtrece":0,"ddoce":0},
            {"name":"Estudiante de Periodismo","dquince":0,"dcatorcer":0,"dtrece":0,"ddoce":0},
            {"name":"Estudiantes","dquince":15,"dcatorcer":5,"dtrece":2,"ddoce":1},
            {"name":"Gremios Sociales","dquince":40,"dcatorcer":1,"dtrece":1,"ddoce":2},
            {"name":"Artista","dquince":2,"dcatorcer":0,"dtrece":1,"ddoce":2},
            {"name":"Instalaciones Físicas de Medio de Comunicación","dquince":0,"dcatorcer":0,"dtrece":3,"ddoce":0},
            {"name":"Defensor de DDHH","dquince":16,"dcatorcer":5,"dtrece":10,"ddoce":0},
            {"name":"Abogados","dquince":7,"dcatorcer":0,"dtrece":4,"ddoce":2},
            {"name":"Líder Comunitario","dquince":9,"dcatorcer":1,"dtrece":3,"ddoce":1},
            {"name":"ONG/DDHH","dquince":0,"dcatorcer":1,"dtrece":1,"ddoce":0},
            {"name":"Religiosos","dquince":0,"dcatorcer":0,"dtrece":0,"ddoce":1},
            {"name":"Activista Politico","dquince":2,"dcatorcer":3,"dtrece":0,"ddoce":0},
            {"name":"Grupo de Periodistas","dquince":6,"dcatorcer":3,"dtrece":4,"ddoce":3},
            {"name":"Edificio de Medio\n","dquince":1,"dcatorcer":0,"dtrece":0,"ddoce":1},
            {"name":"Comunicador Comunitario","dquince":1,"dcatorcer":2,"dtrece":0,"ddoce":3},
            {"name":"Radio Comunitaria","dquince":1,"dcatorcer":0,"dtrece":1,"ddoce":1},
            {"name":"Fotografo","dquince":1,"dcatorcer":0,"dtrece":1,"ddoce":0}
        ];

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 700,
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