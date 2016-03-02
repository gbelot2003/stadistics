'use strict';
var TipoSujetoAgredidoTestController = function($scope, $http, groupArray,  high){

    $http.get('api/reportes/tipo-sujeto-agredido-test').then(function successfunction(response){
        var data = response.data;

        var anios = [];
        var objetos = [];

        data.filter(function(elem) {
            anios.push(elem.name);
        });

        anios = _.uniq(anios);

        anios.forEach(function(e) {
            objetos.push({
                data: function(name) {
                    var array = [];
                    data.forEach(function (elem) {
                        if (elem.name === name) {
                            array.push(elem);
                        }
                    });
                    return array;
                }(e)
            });
        });
        console.log(objetos);
        $scope.chartConfig.series = objetos
    });

    $scope.chartConfig = {
        options: {
            chart: {
                type: 'column',
                height: 600,
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