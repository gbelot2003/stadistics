'use strict';
var TipoSujetoAgredidoTestController = function($scope, $http, groupArray,  high){

    function groupBy(arr, key) {
        var newArr = [],
            types = {},
            newItem, i, j, cur;
        for (i = 0, j = arr.length; i < j; i++) {
            cur = arr[i];
            if (!(cur[key] in types)) {
                types[cur[key]] = { name: cur[key], data: [] };
                newArr.push(types[cur[key]]);
            }

            var ex =  _.omit(cur, 'name');
            var ye =  _.pluck(ex, 'x');
            console.log(ex)
            types[cur[key]].data.push(ye);
        }
        return newArr;
    }

    $http.get('api/reportes/tipo-sujeto-agredido-test').then(function successfunction(response){
        var data = response.data;
        var dseccion = [];

        data.forEach(function(e){
            dseccion.push(e)
        });

        var array = groupBy(dseccion, 'name');
        var yourArray = _(array).toArray();

        console.log(yourArray);

        $scope.chartConfig.series = yourArray;

        //$scope.chartConfig.series.joinBy = 'xAxis';

    });

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 700,
            },
            title: {text: 'Estadisticas por Tipos de Sujetos Agredidos'},
            subtitle: {text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'},
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
                type: 'category',
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

            credits: {enabled: true}
        },
    };



};

module.exports = TipoSujetoAgredidoTestController;