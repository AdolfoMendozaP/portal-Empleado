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
}
