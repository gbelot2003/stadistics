'use strict';
var TipoSujetoAgredidoController = function($scope, $http, high){

    $scope.traza = 1;
    $scope.changeTraza = function(traza){
        $scope.traza = traza;
    };

    $scope.selectedYears = {};
    $scope.addOrRemoveClassFromYear = function(id) {
        if($scope.traza == 1){
            if($scope.selectedYears[id]) {
                $scope.selectedYears[id] = false;
            } else {
                $scope.selectedYears[id] = true;
            }
        }
    };

    $scope.formatPorcent = function(number){
        var retotal = (number*$scope._total)/100;
        return retotal + "%";
    };

    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

    $scope.getData = function($year){
        $http.get('api/reportes/tipo-sujeto-agredido/' + $year).success(function(data){

            $scope.datos = data;

            $scope._total = 0;
            $scope.datos.forEach(function(e){
                $scope._total += e.total;
            });
        });
    };

    $scope.getData(2016);
};
module.exports = TipoSujetoAgredidoController;