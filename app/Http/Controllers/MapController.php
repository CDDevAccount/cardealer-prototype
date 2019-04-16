<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


use App\Models\TblTown;
use App\Models\TblDealer;

class MapController extends Controller
{
	    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index(Request $request)
    {

    	$dealers=TblDealer::whereNotNull('longitude')->get();
        return response()->json(['markers'=>$dealers]);
   }



}
