'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    $scope.years = yearsService.anios;

    function makeCharts(series){

        $('#chart1').highcharts({
            chart: {type: 'bar'},
            title: {text: 'Estadisticas por Tipos de Sujetos Agredidos'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
            xAxis: {
                categories: series.type
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
            credits: {enabled: false},
            series: [series.data]
        });
    }

    $scope.carga = function(year){

        var results = [];
        var tipo = [];
        var totales = [];


        function addVariable(data){
            data.push(data);
            return data;
        };

        $http.get("api/reportes/tipo-sujeto-agredido/" + year).then(function successfunction(response){
            results = addVariable(response.data);

            results.forEach(function(e){
                tipo.push(e.tiposujetoagredido);
                totales.push(e.total);
            });

            $scope.series = {
                    type: tipo,
                    data: {
                        name: year,
                        data: totales
                    }
                };

            makeCharts($scope.series)
        });
    };
};
module.exports = TipoSujetoAgredidoController;