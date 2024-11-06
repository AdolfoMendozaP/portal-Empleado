<?php

namespace App\Http\Controllers\AdminPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrosController extends Controller
{
    public function index()
    {
        return view('adminpages.registros.index');
    }

    public function empleados()
    {
        return view('adminpages.registros.empleados.index');
    }

    public function usuario()
    {
        return view('adminpages.registros.usuario.index');
    }

    public function personal()
    {
        return view('adminpages.registros.personal.index');
    }
}
