<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use DB;

class projeto1Controller extends Controller
{

	public function home()
	{
	    return view('home');

	}
}

