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
        var ssortable = [];

        data.forEach(function(e){
            tipos.push(e.tiposujetoagredido);
            years.push(e.year);
        });

        uniqtipos = _.uniq(tipos);

        uniqyears = _.uniq(years);

        sortotal =  _.groupBy(data, 'name');

        ssortable = _.map(sortotal);

        console.log(ssortable);



        $('#chart1').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Estadisticas por Tipo de Sujeto Agredido'
            },
            subtitle: {
                text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'
            },
            xAxis: {
                categories: [uniqtipos],
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

};
module.exports = TipoSujetoAgredidoController;