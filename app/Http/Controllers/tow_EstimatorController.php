<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tow_EstimatorController extends Controller
{
    public function create() {
		#$arealist = \DB::table('tow_Estimators')->pluck('towFrom', 'tow_id');
		#$arealist = ['#' => 'Select a location'] + collect($arealist) -> toArray();
		#return view('pages.home')->with('arealist', $arealist);
	}
}
