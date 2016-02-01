<?php

namespace App\Http\Controllers;

use App\Agredido;
use App\Alerta;
use App\Tiposujetoagredido;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class ReportesController extends Controller
{

    public function index()
    {
        return View('reportes.index');
    }

    public function tipoSujetoAgredido()
    {
        return View('reportes.tipoSujetoAgredido');
    }

    /**
     * @return mixed
     */
    public function yearscope()
    {
        $years = Agredido::years()->get();
        return $years;
    }

}
