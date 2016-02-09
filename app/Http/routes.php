<?php

Route::get('/', function () {
    return view('main');
});

Route::get('api/reportes/alcance-años', 'ReportesController@yearscope');
Route::get('api/reportes/years', 'ReportesController@setYears');
Route::get('api/reportes/tipo-sujeto-agredido/{year}', 'ReportesController@tipoSujetoAgredido');
Route::get('api/reportes/sujeto-agredido-por-genero/{year}', 'ReportesController@tipoAgredidoPorGenero');
Route::get('api/reportes/medio-o-sistema/{year}', 'ReportesController@medioSistema');


