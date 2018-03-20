<?php

namespace App\Http\Controllers;

use App\Wakamono;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WakamonoController extends Controller
{
		public function index()
		{
			$wakamonoList = Wakamono::all();
			return view('wakamono')->with('wakamonoList',$wakamonoList);
		}
		public function add()
		{
			return view('wakamonoadd');
		}
		public function store(Request $request)
		{
			$wakamono = new Wakamono;

			$wakamono->username = Auth::user()->name;
			$wakamono->old = $request->input('old');
			$wakamono->wantold = $request->wantold;
			$wakamono->area = $request->area;
			$wakamono->description = $request->description;

			$wakamono->save();

			return redirect('young');
		}
}
