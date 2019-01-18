<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\TblVehicle;
use App\Models\LinkCarImage;
use App\Models\TblTown;
use App\Models\TblDealer;

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
      //  dd($request);
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
/*
***************** ROUTINE FOR FINDING DEALERS NEAR A CITY
 public function getCity(Request $request)
*/
    public function getIn($town)
    {

        $city=TblTown::where('town_slug','=',$town)->first();
 
        $long=$city->longitude;
        $lat=$city->latitude;
        $client = new \GuzzleHttp\Client();

        // with the longitude and latitude, get the outcodes of the surrounding postcodes
        $outcodes=array();

        if ($long||$lat){
            $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=4999&limit=99');
            if ($res->getStatusCode()===200){
                $results=json_decode($res->getBody(),true);
                foreach($results as $entry)
                {
                    if (is_array($entry)){
                        foreach ($entry as $loc) {
                            array_push($outcodes,$loc['outcode']);
                        }
                    }
                }
            };

        }

        $inclause="'".implode("','",$outcodes)."'";
     //   $dealers = DB::table('tbl_dealer')
      //      ->join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')
       //      ->select('name','tbl_dealer.phone','make','model','year','price')
        //     ->whereIn('outcode', $outcodes)->get();
             $dealers=TblDealer::with('vehicles')->whereIn('outcode', $outcodes)->get();

           //  dd($dealers);
        // return response()->json($dealers);
             return view('dealeritem',compact('dealers'));

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