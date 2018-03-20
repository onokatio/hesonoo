<?php

namespace App\Http\Controllers;

use App\Wakamono;
use Illuminate\Http\Request;

class WakamonoController extends Controller
{
		public function index()
		{
			$wakamonoList = Wakamono::all();
			// dd($wakamonoList);
			return view('wakamono')->with('wakamonoList',$wakamonoList);
		}
		public function store(Request $request)
		{
			$wakamono = new Wakamono;

			$wakamono->username = Auth::user()->name;
			$wakamono->old = $request->old;
			$wakamono->wantold = $request->wantold;
			$wakamono->area = $request->area;
			$wakamono->description = $request->description;

			$wakamono->save();
		}
}
