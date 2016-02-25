'use strict';
var ListadoController = function($scope, $http, high){
    $http.get('api/alertas/listado').then(function successfunction(response){
       $scope.alertas = response.data
    });
};

module.exports = ListadoController;
