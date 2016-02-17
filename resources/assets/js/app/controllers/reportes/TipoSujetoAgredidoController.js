'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    $http.get('api/reportes/tipo-sujeto-agredido-test/').success(function(data){
        var tipos = [];
        var uniqtipos = [];
        var years = [];
        var uniqyears = [];
        var totales = [];
        var series = [];
        var sortotal = [];

        data.forEach(function(e){
            tipos.push(e.tiposujetoagredido);
            years.push(e.year);
            totales.push({year: e.year, total: e.total})
        });
        uniqtipos = _.uniq(tipos);
        uniqyears = _.uniq(years);

        sortotal =  _.groupBy(totales, 'year');

        console.log(sortotal)

        $('#container').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Historic World Population by Region'
            },
            subtitle: {
                text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
            },
            xAxis: {
                categories: uniqtipos,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Population (millions)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: ' millions'
            },
            plotOptions: {
                bar: {
                    dataLabels: {
                        enabled: true
                    }
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
            credits: {
                enabled: false
            },
            series: sortotal
        });
    });


/*
    dates.forEach(function (e) {
        $http.get('api/reportes/tipo-sujeto-agredido/' + e).success(function(data){
            var tiposujeto = [];
            var totales = [];
            var utotatal = [];

            var series = [];
            data.forEach(function(e){
                tiposujeto.push(e.tiposujetoagredido);
                totales.push(e.total);
            });

            utotatal = _.pluck(totales);
            console.log(utotatal)
            series = {
                'año': e,
                'data': totales
            };

            $('#container').highcharts({
                chart: {
                    type: 'bar'
                },
                title: {
                    text: 'Historic World Population by Region'
                },
                subtitle: {
                    text: 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>'
                },
                xAxis: {
                    categories: [tiposujeto],
                    title: {
                        text: null
                    }
                },
                yAxis: {
                    min: 0,
                    title: {
                        text: 'Population (millions)',
                        align: 'high'
                    },
                    labels: {
                        overflow: 'justify'
                    }
                },
                tooltip: {
                    valueSuffix: ' millions'
                },
                plotOptions: {
                    bar: {
                        dataLabels: {
                            enabled: true
                        }
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
                credits: {
                    enabled: false
                },
                series: series
            });

        });
    });
*/

/*    $http.get('api/reportes/tipo-sujeto-agredido/' + 2015).success(function(data){

        var tiposujeto = [];
        var utiposujeto = [];
        var totales = [];
        var utotales = [];

        data.forEach(function(e){
            tiposujeto.push(e.tiposujetoagredido);
            totales.push(e.total);
        });

        utiposujeto = _.uniq(tiposujeto);
    });*/


/*    $scope.$watch('product', function(newValue){
        if(typeof newValue != 'undefined'){
            $scope.myFunction();
        }
    });*/
};
module.exports = TipoSujetoAgredidoController;