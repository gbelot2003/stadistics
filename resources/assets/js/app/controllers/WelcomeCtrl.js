'use strict';
var WelcomeCtrl = function($scope, $http) {
    $scope.pageClass = 'page-home';
    $scope.testVar = 'Alertas';
    $http.get('api/reportes/agredidos-por-departamento/2016').then(function successfunction(response){
        $scope.data = response.data;


        console.log($scope.data);
        $(function () {
            // Initiate the chart
            $('#container').highcharts('Map', {

                title : {
                    text : 'Mapa de Agresiones a la libertad de expresión en Honduras año 2016'
                },

                subtitle : {
                    text : 'Source map: <a href="https://code.highcharts.com/mapdata/countries/hn/hn-all.js">http://clibrehonduras.com</a>'
                },

                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        verticalAlign: 'bottom'
                    }
                },

                colorAxis: {
                    min: 0
                },

                series : [{
                    data : $scope.data,
                    mapData: Highcharts.maps['countries/hn/hn-all'],
                    joinBy: 'hc-key',
                    name: 'Random data',
                    states: {
                        hover: {
                            color: '#BADA55'
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }]
            });
        });
    });




};

module.exports = WelcomeCtrl;