<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\TblVehicle;
use App\Models\LinkCarImage;
use App\Models\TblTown;
use App\Models\TblDealer;



class SearchController extends Controller
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
       // dd($request->sort);
        $request->flash();
       // $vehicle=TblVehicle::all();
       //
        $vehicle= (new TblVehicle)->newQuery();
// Wheres
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
/// Sorts

        if($request->sort&&$request->direction){
            $vehicle->orderBy($request->sort,$request->direction);
        }

        $marques = DB::table('tbl_vehicles')
             ->select('make', DB::raw('count(*) as total'))
             ->groupBy('make')
             ->get();
        $marques=$marques->sortBy('make');
        $marques=$marques->pluck('make','make');
        
        $cars=$vehicle->paginate(24);
        return view('index',compact('cars'),compact('marques'));
    }




    public function getIn($town = false)
    {
        if (!$town){
            return redirect('used-cars/');
        }
      // dd($town);
        // does $town have any numerics in it (its a postcode or Stalagluft 15)
        if (preg_match('/\\d/', $town) > 0){    
            // If it is in postcode format... then it is a postcode
            $client = new \GuzzleHttp\Client();
            if (preg_match('/^(([gG][iI][rR] {0,}0[aA]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$/',$town)){
                $postcode=$town;
                $res = $client->get('api.postcodes.io/postcodes?q='.$town);
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
                $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=14999&limit=99');
            }else{
            // if it isn't a full postcode then perhaps it is an Outcode

                $res=$client->get('api.postcodes.io/outcodes/'.$town);
                if ($res->getStatusCode()===200){
                    $returned=json_decode($res->getBody(),true);
                    if (is_array($returned)){

                          foreach ($returned as $key=>$value ) {

                            if (is_array($value)){
                               if (array_key_exists('longitude', $value)) {
                                     $long=$value['longitude'];
                                }
                               if (array_key_exists('latitude', $value)) {
                                     $lat=$value['latitude'];
                                }     
                            }

                        }                      
                    }
                }
              //  get the long and lat of the outcode
              //  get the surrounding outcodes
                 $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=24999&limit=99');
            }

        }else{
            // otherwise it may be a town
            $city=TblTown::where('town_slug','=',$town)->firstOrFail();
            $long=$city->longitude;
            $lat=$city->latitude;
            $client = new \GuzzleHttp\Client();
            $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=4999&limit=99');
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
        $towns = TblTown::where('longitude','>','')->orderBy('town', 'ASC')->get();
        $inclause="'".implode("','",$outcodes)."'";
        $dealers=TblDealer::with('vehicles')->whereIn('outcode', $outcodes)->get();
        return view('dealeritem',compact('dealers'),compact('towns'));

    }

    /*
        filter section to refine selected cars.


     */
        public function filter(Request $request,  $motors)
        {
            $motors=$motors->newQuery();
            if ($request->has('model_type')) {
                $motors->where('model_type', $request->input('model_type'));
            }
            dd($motors);
            return $motors->get();
        }

    public function getSearch(Request $request)
    {
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
        
        $cars=$vehicle->get();
        return view('index',compact('cars'),compact('marques'));
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