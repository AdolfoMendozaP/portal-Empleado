<?php

namespace App\Http\Controllers\AdminPages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    public function index()
    {
        return view('adminpages.asistencia.index');
    }
}
