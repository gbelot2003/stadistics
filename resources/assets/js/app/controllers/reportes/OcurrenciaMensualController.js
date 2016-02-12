'use strict';
var OcurrenciaMensualController = function($scope, $http, high){

    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

    $scope.getData = function($year){
        $http.get('api/reportes/agredidos-por-mes/' + $year).success(function(data){

            $scope.datos = data;

        });
    };

    $scope.getData(2016);
};
module.exports = OcurrenciaMensualController;