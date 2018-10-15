<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class usuarioController extends Controller
{
    public function formulario()
	{
	    return view('formulario');
	}

}
