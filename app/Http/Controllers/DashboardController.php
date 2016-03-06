<?php

namespace App\Http\Controllers;

use App\Alerta;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;

class DashboardController extends Controller
{
    public function __construct()
    {

    }

    /**
     * @route '/admin/dashboard'
     *
     * @return View
     */
    public function index()
    {
        /**
         * Agregar estado como relación
         */
        $response = Alerta::where('published_state', '=', 1)->orderBy('id', 'DESC')->paginate(15);
        return View('backend.dashboard.index', compact('response'));
    }
}
