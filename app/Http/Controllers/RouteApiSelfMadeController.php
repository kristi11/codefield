<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteApiSelfMadeController extends Controller
{
        public function route_api(Request $request)
        {
       		return $request->user();
    	}
}
