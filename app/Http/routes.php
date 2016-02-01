<?php

Route::get('/', function () {
    return view('pages');
});

Route::get('reportes', 'ReportesController@index');

//Route::get('api/reportes/alcance-años', 'ReportesController@yearscope');
//Route::get('api/reportes/tipo-sujeto-agredido/{year}', 'ReportesController@tipoSujetoAgredido');
