'use strict';
var MedioSistemaController = function($scope, $http, high){

    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

    $scope.getData = function($year){
        $http.get('api/reportes/medio-o-sistema/' + $year).success(function(data){

            $scope.datos = data;

            $scope._total = 0;
            $scope.datos.forEach(function(e){
                $scope._total += e.total;
            });
        });
    };

    $scope.getData(2016);

};
module.exports = MedioSistemaController;