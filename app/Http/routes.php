<?php

Route::get('/', function () {
    return view('main');
});

Route::get('api/reportes/alcance-años', 'ReportesController@yearscope');
Route::get('api/reportes/years', 'ReportesController@setYears');
Route::get('api/reportes/tipo-sujeto-agredido/{year}', 'ReportesController@tipoSujetoAgredido');
