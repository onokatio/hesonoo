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
			$wakamono = Wakamono::where('userid',Auth::user()->id)->first();
			//dd($wakamono);
			return view('wakamonoadd')->with('wakamono',$wakamono);
		}
		public function store(Request $request)
		{
			$wakamonoCheck = Wakamono::where('userid',Auth::user()->id)->first();
			if($wakamonoCheck == null){
				$wakamono = new Wakamono;
			}else{
				$wakamono = Wakamono::find($wakamonoCheck->id);
			}
				$wakamono->username = Auth::user()->name;
				$wakamono->old = $request->input('old');
				$wakamono->wantold = $request->wantold;
				$wakamono->area = $request->area;
				$wakamono->description = $request->description;

				$wakamono->save();

			return redirect('young');
		}
}
