'use strict';
var TipoSujetoAgredidoController = function($scope, $http, yearsService, high){

    yearsService.anios().success(function(data, $http){

        var anios = [];
        var tiposujeto = [];
        var count = [];
        var series = [];
        data.forEach(function(e){
            anios.push(e.year);
            tiposujeto.push(e.tiposujetoagredido)
        });
        var ydata = _.uniq(anios);
        var utiposujeto = _.uniq(tiposujeto);

        ydata.forEach(function(e){
            series.push(_.where(data, {year: e}));
        });
        console.log(series);
    });

   /* $http.get('api/reportes/tipo-sujeto-agredido-test').success(function(data){

        var anios = [];
        var tipo = [];
        var total = [];
        data.forEach(function(e){
            anios.push(e.year);
            tipo.push(e.tiposujetoagredido);//
            total.push(e.total);
        });get()



        var tipou = _.uniq(tipo);

        var rseries = [
            {'years' : _.uniq(anios)}
        ];
        var year = _.uniq(anios);
        var groups = _.where(total, year);

        console.log(year);


        $scope.chartConfig = {
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
                categories: [tipou],
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Tipos de Sujeto Agredido (años)',
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
            series: [{
                name: 'Year 1800',
                data: [107, 31, 635, 203, 2]
            }, {
                name: 'Year 1900',
                data: [133, 156, 947, 408, 6]
            }, {
                name: 'Year 2012',
                data: [1052, 954, 4250, 740, 38]
            }]
        }
    }).error(function(data){
        console.log(data)
    });*/



};
module.exports = TipoSujetoAgredidoController;