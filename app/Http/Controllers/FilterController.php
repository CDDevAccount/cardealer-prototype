<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cache;


use App\Models\TblVehicle;
use App\Models\LinkCarImage;
use App\Models\TblTown;
use App\Models\TblDealer;



class FilterController extends Controller
{
/*
     ***************** ROUTINE FOR FINDING DEALERS NEAR A CITY
     public function getCity(Request $request)
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index(Request $request)
    {

        $request->flash();
        $vehicle= (new TblVehicle)->newQuery();
       // $data=TblVehicle::orderBy('id')->paginate(4);
       // $dealers='all';
        $cars=$vehicle->paginate(6);
       return response()->json($cars);
   }
       /* Get dealers near Post Code */
    // returns array of nearby dealer IDs
    public static function localdealers($postcode=false){

            $client = new \GuzzleHttp\Client();
        
            if (preg_match('/^(([gG][iI][rR] {0,}0[aA]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$/',$postcode)){
                $res = $client->get('api.postcodes.io/postcodes?q='.$postcode);
                if ($res->getStatusCode()===200){
                    $returned=json_decode($res->getBody(),true);
                    if (is_array($returned)){

                          foreach ($returned as $key=>$value ) {

                            if (is_array($value)){
                               if (array_key_exists('longitude', $value[0])) {
                                     $long=$value[0]['longitude'];
                                }
                               if (array_key_exists('latitude', $value[0])) {
                                     $lat=$value[0]['latitude'];
                                }     
                            }

                        }                      
                    }

                }

                $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=24999&limit=99');
            
            }
            // with the longitude and latitude, get the outcodes of the surrounding postcodes
            $outcodes=array();
                
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

            $inclause="'".implode("','",$outcodes)."'";
            $dealers=TblDealer::whereIn('outcode', $outcodes)->pluck('id')->toArray();
            //$dealers=$dealers->pluck('id','dealerid');

            return $dealers;
    }


    public function setfilter(Request $request)
    {
        $request->session()->put('postcode', $request->postcode);
        $request->session()->forget('selected.makes');
        if ($request->filled('postcode')){
                $request->session()->put('postcode', $request->postcode);
        }else{
                $request->session()->forget('postcode');
        }
        if ($request->filled('make')){
                    $request->session()->put('selectedmake', $request->make);
 
        }else{
                $request->session()->forget('selectedmake');
        }
        if ($request->filled('makes')){
            if (is_array($request->makes)){
                $makes=$request->makes;
                $request->session()->push('selected.makes', $makes);
            }else{
                $request->session()->forget('selected.makes');
            }
        }else{
            $request->session()->forget('selected.makes');
        }
        $data = $request->session()->all();
        return response()->json($data);
    }
    /*
        filter section to refine selected cars.


     */
        public function filter(Request $request)
        {
         $dealers=false;
         $vehicle= (new TblVehicle)->newQuery();
         
         
         if ($request->session()->has('selectedmake')) {
            $make= $request->session()->get('selectedmake');
            $vehicle->where('make',$make);
         }
         if ($request->session()->has('selected.makes')){
               $makes=$request->session()->get('selected.makes');
               //$vehicle->whereIn('make',$makes);
         }
            
           // $makes=explode(',',$makes);
            
        // }
      //   //dd($make);
      //   $vehicle->where('make',$make);
         /*
   
        if ($request->filled('makes')){
            $makes=explode(',',$request->makes);
            $vehicle->whereIn('make',$makes);

        }
        */
      //   dd($makes);
        if ($request->filled('bodies')){
             $bodies=explode(',',$request->bodies);
            $vehicle->whereIn('model_type',$bodies);

        }


        $cars=$vehicle->paginate(6);
            // return response()->json($cars);
            if (Cache::has('makes')) {
               $marques= Cache::store('file')->get('makes');
            }else{
                $marques = DB::table('tbl_vehicles')
                 ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
                $marques=$marques->sortBy('make');
                $marques=$marques->pluck('make','make');
                Cache::store('file')->put('makes', $marques, 10);
            }
            return response()->json($cars);
     //   return view('index',compact('cars','marques','dealers'));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

}