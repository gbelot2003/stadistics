'use strict';
var ReportesController = function($scope, $http, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $http.get('api/reportes/tipo-sujeto-agredido').success(function(data){

       $scope.data = data;
        var years = $scope.data.years;
        var arr = [];

        $scope.agresion = data.data;
        var agresion = [];

        years.forEach(function(e){
            arr.push(e.year);
        });

        $scope.agresion.forEach(function(e){
            agresion.push(e.agresion);
        });

        console.log(agresion);

        $scope.chartConfig = {
            options: {
                chart: {
                    type: 'bar'
                }
            },
            title: {
                text: 'Tipo Sujeto Agredido'
            },
            plotOptions: {
                line: {
                    dataLabels: {
                        enabled: true
                    },
                    enableMouseTracking: false
                }
            },
            series: [{
                name: arr, data: data.data
            }]
        };
    });
};

module.exports = ReportesController;