<?php

namespace App\Http\Controllers;

use App\Wakamono;
use Illuminate\Http\Request;

class WakamonoController extends Controller
{
    //
		public function index()
		{
			return view('wakamono');
		}
}
