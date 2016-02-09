'use strict';
var TipoAgresorController = function($scope, $http, high){

    $http.get("api/reportes/years").success(function(data){
        $scope.years = data;
    });

};
module.exports = TipoAgresorController;
