<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblVehicle;
use App\Models\LinkCarImage;

use Illuminate\Support\Facades\DB;

class UsedCarsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $marques = DB::table('tbl_vehicles')
                 ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
            $marques=$marques->sortBy('make');
            $cars=TblVehicle::orderBy('make')->paginate(10);
           return view('index',compact('cars'),compact(':qmarques'), compact('dealerscores'));
           // return response()->json($cars);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        //  
        $showcar=TblVehicle::where('slug', $slug)->firstOrFail();
        //$showcar=TblCarScrape::findOrFail($id);
        $car_reg=$showcar->registration;
        $images=LinkCarImage::where('registration','=', $car_reg)->get();
         return view('viewcar', ['car' => $showcar,'images'=>$images]);
    }


}