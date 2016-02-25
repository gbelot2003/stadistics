'use strict';
var AlertasController = function($scope, $http, $routeParams){
    $scope.parameters = $routeParams.id;
    $http.get('api/alertas/' + $scope.parameters).then(function successfunction(request){
        $scope.alerta = request.data;
        $scope.body = $scope.alerta.body;
    });
};

module.exports = AlertasController;
