'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    var anios = yearsService.anios;
    $scope.carga = function(){

        var data = [];
        var tipos = [];
        var sid = [];
        var ordena = [];
        var series = [];

        /** Constructor **/
        $http.get('api/reportes/tipo-sujeto-agredido-test/').then(function successCallback(response){
            data = response.data;
            tipos = types(data);
            sid = getSids(data);

            anios.forEach(function(e){
                ordena.push(orderByYears(e, data));
            });


            console.log(ordena)
        });

/*        function matchBySid(sid, data){
            var variables = [];
            var result = [];

            data.forEach(function(e){
                variables.push(e);
            });

            variables.forEach(function(e){
                if(e.sid === sid){
                    result.push(e);
                } else {
                    result.push(0);
                }
            })
        }*/

        function orderByYears(year, data){
            var result = [];
            data.forEach(function(e){
                if(e.year === year){
                    result.push(e.total)
                }
            });
            return result;
        }

        function types (data){
            var myType = [];
            data.forEach(function(e){
                myType.push(e.tiposujetoagredido)
            });
            var UTypes = _.uniq(myType);
            return UTypes;
        }

        function getSids(object){
            var myType = [];
            data.forEach(function(e){
                myType.push(e.sid)
            });
            var UTypes = _.uniq(myType);
            return UTypes;

        }

        function makeCharts(series){

            $('#chart1').highcharts({
                chart: {type: 'bar'},
                title: {text: 'Estadisticas por Tipos de Sujetos Agredidos'},
                subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
                xAxis: {
                    categories: [],
                    title: { text: null }
                },
                plotOptions: {
                    bar: {
                        dataLabels: {enabled: true}
                    }
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
                series: series

            });
        }

    };

    $scope.carga();
};
module.exports = TipoSujetoAgredidoController;