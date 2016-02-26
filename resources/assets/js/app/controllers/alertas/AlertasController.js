'use strict';
var AlertasController = function($scope, moment, $http, $routeParams){

    $scope.parameters = $routeParams.id;
    $http.get('api/alertas/' + $scope.parameters).then(function successfunction(request){
        $scope.alerta = request.data;
        $scope.body = $scope.alerta.body;
        $scope.date = moment($scope.published_date).format('YYYY-MM-DD');
    });
};

module.exports = AlertasController;
