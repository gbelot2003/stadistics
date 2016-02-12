'use strict';
var TipoSujetoAgredidoTestController = function($scope, $http, high){
    $http.get('api/reportes/tipo-sujeto-agredido-test').success(function(data){
        //console.log(data);
        //console.log(_);
        var anios = [];
        var tipo = [];
        data.forEach(function(e){
           anios.push(e.year);
            tipo.push(e.tiposujetoagredido);

        });
        //console.log(_.uniq(anios));
        //console.log(_.uniq(tipo));
    });
};

module.exports = TipoSujetoAgredidoTestController;