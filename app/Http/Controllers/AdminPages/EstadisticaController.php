<?php

namespace App\Http\Controllers\Adminpages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EstadisticaController extends Controller
{
    public function index()
    {
        return view('adminpages.estadistica.index');
    }
}
