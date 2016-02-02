'use strict';
var TipoSujetoAgredidoController = function($scope, $http, high){
    $scope.pageClass = 'page-cliente';

    $http.get('api/reportes/tipo-sujeto-agredido/' + 2012).success(function(data){
        $scope.year = data.year;
        $scope.datas = data.data;
        console.log($scope.datas)
    });
};
module.exports = TipoSujetoAgredidoController;