'use strict';
var ListadoController = function($scope, moment, $http){
    $http.get('api/alertas/listado').then(function successfunction(response){
       $scope.alertas = response.data
    });

    $scope.changeDate = function(date){
        return moment($scope.published_date).format('YYYY-MM-DD');
    }
};

module.exports = ListadoController;
