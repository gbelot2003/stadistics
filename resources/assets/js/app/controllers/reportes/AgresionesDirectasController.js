'use strict';
var AgresionesDirectasController = function($scope, $http, high){
    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

    $scope.getData = function($year){
        $http.get('api/reportes/agresion-directa/' + $year).success(function(data){

            $scope.datos = data;

        });
    };

    $scope.getData(2016);

};

module.exports = AgresionesDirectasController;
