'use strict';
var years = function(){
    return {
        restrict: 'E',
        templateUrl: 'js/app/views/directives/years.html',
        controller: function($scope, $http){
            $http.get('api/reportes/years', function(data){
                $scope.years = data;
            })
        }
    }
};
module.exports = years;