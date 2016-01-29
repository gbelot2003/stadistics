'use strict';
var ReportesController = function($scope, $http, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $http.get('api/reportes/tipo-sujeto-agredido').success(function(data){

       $scope.data = data;
       var years = $scope.data.years;
       $scope.agresion = data.data;

        var agresion = [];
        var arr = [];
        var total = [];

        years.forEach(function(e){
            arr.push(e.year);
        });

        $scope.agresion.forEach(function(e){
            agresion.push(e.agresion);
            total.push(e.total)
        });

        console.log(agresion);
        console.log(total);

        $scope.chartConfig = {
            options: {
                chart: {
                    type: 'area'
                }
            },
            title: {
                text: 'Tipo Sujeto Agredido'
            },
            xAxis: {
                categories: [agresion]
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