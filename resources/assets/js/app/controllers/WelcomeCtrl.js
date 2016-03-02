'use strict';
var WelcomeCtrl = function($scope, $http, yearsService) {
    $scope.pageClass = 'page-home';
    $scope.testVar = 'Estadisticas de agresiones';
    $scope.peyear = yearsService.anios;

    $scope.setData = function(year){
        $scope.year = year;

        $http.get('api/reportes/mainpage/' + year).then(function successfunction(response){
            $scope.data = response.data.departamentos;
            $scope.totalAlertas = response.data.alertas;
            $scope.agresiones = response.data.agresiones;
            $scope.asesinatos = response.data.asesinatos;
            $scope.maxDepartamento = response.data.maxDepartamento;
            $scope.maxMeses = response.data.maxMeses;

            $(function () {
                // Initiate the chart
                $('#container').highcharts('Map', {

                    title : {
                        text : 'Mapa de Agresiones a la libertad de expresión en Honduras año ' + year
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
    $scope.setData(2016);
};

module.exports = WelcomeCtrl;