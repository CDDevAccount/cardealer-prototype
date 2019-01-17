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
    public function index(Request $request)
    {
      //  return Vehicle::filter($filters)->get()
        $request->flash();
        $vehicle= (new TblVehicle)->newQuery();

        if ($request->exists('cheap')){
            $vehicle->orderBy('price','asc');
        }
        if ($request->filled('make')){
            $vehicle->where('make',$request->make);
        }
        if ($request->filled('model')){
            $vehicle->where('model',$request->model);
        }
        if ($request->filled('model_family')){
            $vehicle->where('model_family',$request->model_family);
        }
        if ($request->filled('minprice')){
            $vehicle->where('price','>',$request->minprice);
        }
        if ($request->filled('maxprice')){
            $vehicle->where('price','<',$request->maxprice);
        }
        if ($request->filled('year')){
            $vehicle->where('year',$request->year);
        }
        if ($request->filled('model_type')){
            $vehicle->where('model_type',$request->model_type);
        }       
        if ($request->filled('fuel')){
            $vehicle->where('fuel_type',$request->fuel);
        }           
        $vehicle->limit(60);
            $marques = DB::table('tbl_vehicles')
                 ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
            $marques=$marques->sortBy('make');
            $marques=$marques->pluck('make','make');
            
            /*
            $marques = DB::table('tbl_vehicles')
                 ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
            $marques=$marques->sortBy('make');
            $cars=TblVehicle::orderBy('make')->paginate(12);

           return view('index',compact('cars'),compact('marques'), compact('dealerscores'));
           */
           $cars=$vehicle->get();
           return view('index',compact('cars'),compact('marques'));
           // return $vehicle->get();
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