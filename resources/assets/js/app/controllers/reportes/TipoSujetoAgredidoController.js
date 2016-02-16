'use strict';
var TipoSujetoAgredidoController = function($scope, $http, high){



    $http.get('api/reportes/tipo-sujeto-agredido/2013').success(function(data){
        var anios = [];
        var tiposujeto = [];
        var utiposujeto = [];
        var totales = [];
        var utotales = [];

        data.forEach(function(e){
            tiposujeto.push(e.tiposujetoagredido)
            totales.push(e.total)
        });

        utiposujeto = _.uniq(tiposujeto);


        $('#chart1').highcharts({
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Tipos de Sujeto Agredido'
            },
            subtitle: {
                text: 'Source: <a href="http://clibrehonduras.com">clibrehonduras.com</a>'
            },
            xAxis: {
                categories: utiposujeto,
                title: {
                    text: null
                }
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Agresiones (Por Tipo de Sujeto)',
                    align: 'high'
                },
                labels: {
                    overflow: 'justify'
                }
            },
            tooltip: {
                valueSuffix: 'Agresiones'
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
                name: 'Year 2013',
                data: totales
            }]
        });
    });

};
module.exports = TipoSujetoAgredidoController;