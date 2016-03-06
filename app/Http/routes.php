<?php

Route::get('/', function(){return view('main');});
Route::get('api/alertas/listado', 'ListadoAlertasController@listado');
Route::get('api/reportes/mainpage/{year}', 'ReportesController@dataMainPage');
Route::get('api/reportes/alcance-años', 'ReportesController@yearscope');
Route::get('api/reportes/years', 'ReportesController@setYears');
Route::get('api/reportes/tipo-sujeto-agredido/{year}', 'ReportesController@tipoSujetoAgredido');
Route::get('api/reportes/sujeto-agredido-por-genero/{year}', 'ReportesController@tipoAgredidoPorGenero');
Route::get('api/reportes/medio-o-sistema/{year}', 'ReportesController@medioSistema');
Route::get('api/reportes/tipo-de-medio/{year}', 'ReportesController@tipoMedioSistema');
Route::get('api/reportes/tipo-de-agresor/{year}', 'ReportesController@tipoByAgresor');
Route::get('api/reportes/agresion-directa/{year}', 'ReportesController@agresionDirecta');
Route::get('api/reportes/agresion-indirecta/{year}', 'ReportesController@agresionIndirecta');
Route::get('api/reportes/agresiones-por-categoria/{year}/{catId}', 'ReportesController@agresionesByCategory');
Route::get('api/reportes/agredidos-por-departamento/{year}', 'ReportesController@dataByDepartamentos');
Route::get('api/reportes/agredidos-por-mes/{year}', 'ReportesController@dataByMes');
Route::get('api/alertas/{id}', 'AlertasController@show');

Route::resource('admin/alertas', 'AlertasController');


/**
 * Backend
 */

Route::get('/admin/dashboard', 'DashboardController@index');


/**
 * Pruebas
 */

Route::get('api/reportes/tipo-sujeto-agredido-test', 'ReportesController@tipoSujetoAgredidoTest');