'use strict';
var ReportesController = function($scope, $http, high) {
    $scope.pageClass = 'page-clientes';
    $scope.testVar = 'Esta es el area de clientes Controller!';

    $http.get('api/reportes/tipo-sujeto-agredido').success(function(data){

       $scope.data = data;

        var agresion = [];
        var _2010 = [];
        var _2011 = [];
        var _2012 = [];
        var _2013 = [];

        $scope.data.forEach(function(e){
            agresion.push(e.agresion);
            _2010.push(parseInt(e.ddiez));
            _2011.push(parseInt(e.donce));
            _2012.push(parseInt(e.ddoce));
            _2013.push(parseInt(e.dtrece));
        });

        console.log(_2012);

        $scope.chartConfig = {
            options: {
                chart: {
                    type: 'bar'
                }
            },
            title: {
                text: 'Tipo Sujeto Agredido'
            },
            xAxis: {
                categories: agresion
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
                name: "Año 2010", data: _2010
            }, {
                name: "Año 2011", data: _2011
            }, {
                name: "Año 2012", data: _2012
            }, {
                name: "Año 2013", data: _2013
            }]
        };
    });
};

module.exports = ReportesController;