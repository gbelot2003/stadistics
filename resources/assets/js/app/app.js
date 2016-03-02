'use strict';

require('angular');
/** libraries injected require **/
var routes = require('angular-route');
var sanitize = require('angular-sanitize');
var animate = require('angular-animate');
var uibs = require('angular-ui-bootstrap');
var high = require('highcharts-ng');
var moment = require('moment');
var groupArray = require('group-array');

/** Main instance **/
var app = angular.module('adminApp', [routes, sanitize, animate, uibs, high]);

/** Controllers **/
var menuController = require('./controllers/menuController');
var WelcomeCtrl = require('./controllers/WelcomeCtrl');
var ManualCtrl = require('./controllers/pages/ManualCtrl');
var AlertasCtrl = require('./controllers/alertas/AlertasController');
var ListadoCrtl = require('./controllers/alertas/ListadoController');
var TipoSujetoAgredido = require('./controllers/reportes/TipoSujetoAgredidoController');
var SujetoAgredidoGenero = require('./controllers/reportes/SujetoAgredidoGeneroController');
var TipoMedio = require('./controllers/reportes/TipoMedioController');
var AgresionesDirectas = require('./controllers/reportes/AgresionesDirectasController');
var AgresionesIndirectas = require('./controllers/reportes/AgresionesIndirectasController');
var TipoAgresorController = require('./controllers/reportes/TipoAgresorController');
var LocacionController = require('./controllers/reportes/LocacionController');
var OcurrenciaMensualController = require('./controllers/reportes/OcurrenciaMensualController');
var TipoSujetoAgredidotest = require('./controllers/reportes/TipoSujetoAgredidoTestController');


app.constant("moment", moment);
app.constant("groupArray", groupArray);

/** Directives **/
var menu = require('./directives/menu');
var years = require('./directives/years');
app.directive('menuNav', menu);
app.directive('yearsNav', years);

/** Config **/
app.config(function($routeProvider, $locationProvider){

    $routeProvider
        .when('/', { controller: 'WelcomeCtrl', templateUrl: './js/app/views/index.html' })
        .when('/manual', { controller: 'ManualCtrl', templateUrl: './js/app/views/pages/manual.html' })
        .when('/alertas/detalle/:id',{ controller: 'AlertasController', templateUrl: './js/app/views/alertas/alertas.html'})
        .when('/alertas/listado',{ controller: 'ListadoController', templateUrl: './js/app/views/alertas/listado.html'})
        .when('/reportes/tipo-sujeto-agredido',{ controller: 'TipoSujetoAgredidoController', templateUrl: './js/app/views/reportes/tipoSujetoAgredido.html' })
        .when('/reportes/sujeto-agredido-por-genero',{ controller: 'SujetoAgredidoGeneroController', templateUrl: './js/app/views/reportes/sujetoAgredidoGenero.html' })
        .when('/reportes/tipo-de-medio', { controller:'TipoMedioController', templateUrl:'./js/app/views/reportes/tipoMedio.html' })
        .when('/reportes/agresiones-directas', { controller:'AgresionesDirectasController', templateUrl:'./js/app/views/reportes/agresionDirecta.html' })
        .when('/reportes/agresiones-indirectas', { controller:'AgresionesIndirectasController', templateUrl:'./js/app/views/reportes/agresionIndirecta.html' })
        .when('/reportes/tipo-de-agresor', { controller:'TipoAgresorController', templateUrl:'./js/app/views/reportes/tipoAgresor.html' })
        .when('/reportes/locacion', { controller:'LocacionController', templateUrl:'./js/app/views/reportes/locacion.html' })
        .when('/reportes/ocurrencias-menuales', { controller:'OcurrenciaMensualController', templateUrl:'./js/app/views/reportes/ocurrenciaMensual.html' })
        .when('/reportes/test', {controller:'TipoSujetoAgredidoTestController', templateUrl: './js/app/views/reportes/tipoSujetoAgredidoTest.html'})
        .otherwise({redirectTo: '/'});

    $locationProvider.html5Mode(false);
});



/** Instances **/
app.controller('menuController', ['$scope', menuController]);
app.controller('WelcomeCtrl', ['$scope', '$http', WelcomeCtrl]);
app.controller('ManualCtrl', ['$scope', ManualCtrl]);
app.controller('AlertasController', ['$scope', 'moment', '$http', '$routeParams' ,AlertasCtrl]);
app.controller('ListadoController', ['$scope', 'moment', '$http', ListadoCrtl]);
app.controller('TipoSujetoAgredidoController', ['$scope', '$http', 'yearsService' ,TipoSujetoAgredido]);
app.controller('SujetoAgredidoGeneroController', ['$scope', '$http', SujetoAgredidoGenero]);
app.controller('TipoMedioController', ['$scope', '$http', TipoMedio]);
app.controller('AgresionesDirectasController', ['$scope', '$http', AgresionesDirectas]);
app.controller('AgresionesIndirectasController', ['$scope', '$http', AgresionesIndirectas]);
app.controller('TipoAgresorController', ['$scope', '$http', TipoAgresorController]);
app.controller('LocacionController', ['$scope', '$http', LocacionController]);
app.controller('OcurrenciaMensualController', ['$scope', '$http', OcurrenciaMensualController]);
app.controller('TipoSujetoAgredidoTestController', ['$scope', '$http', 'groupArray', TipoSujetoAgredidotest]);

/** Factorys **/
app.factory('yearsService', function(){
    var tyears = [2015, 2014, 2013, 2012];
    return {
        anios: tyears
    }
});