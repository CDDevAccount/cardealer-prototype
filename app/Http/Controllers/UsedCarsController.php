<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use Request;
use Illuminate\Support\Facades\DB;

use App\Models\TblVehicle;
use App\Models\LinkCarImage;
use App\Models\TblTown;
use App\Models\TblDealer;
use App\Models\TblMake;

class UsedCarsController extends Controller
{
/*
    ***************** ROUTINE FOR FINDING motors NEAR A CITY
     public function getCity(Request $request)
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index($town=null,$make=null)
    {

        //      DB::enableQueryLog();
        $fred=Request::get('sort');
        $barney=Request::get('direction');
      //  dd($town);

//  Finds slug in town table and display cars from there

        if ($town){

                $city=TblTown::where('town_slug','=',$town)->firstOrFail();
                $long=$city->longitude;
                $lat=$city->latitude;
                $client = new \GuzzleHttp\Client();
                $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=4999&limit=99');

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
        }
        if ($make){

            $checkedMake=TblMake::where('slug','=',$make)->firstOrFail();
            $make=$checkedMake->make;
        }
        if ($town&&$make){
// if both town and make are set
 
            $motors= TblDealer::join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')->where('tbl_vehicles.make','=',$make)->whereIn('tbl_dealer.outcode',$outcodes)->select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);
        }elseif($town){
// if only town is set
 
            $motors= TblDealer::join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')->whereIn('tbl_dealer.outcode',$outcodes)->select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);
        }else{
// if nothing is set
 
      // $motors= TblDealer::join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')->select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);
         $motors= TblVehicle::select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);
       // $motors=TblVehicle::orderBy($fred, $barney);


        }
        $towns = TblTown::where('longitude','>','')->orderBy('town', 'ASC')->get();
        
        $query = DB::getQueryLog();
/*
  dd($query);
        if ($barney=='desc'){
            $motors->setCollection($motors->sortByDesc($fred)); 
        }else{
            $motors->setCollection($motors->sortBy($fred)); 
        }
        $query = DB::getQueryLog();
  dd($query);
  */  
       // $motors->sortable()->paginate(24)  ;   
        return view('dealeritem',compact('motors','towns','city','checkedMake')); 
    }

    public function getSearch(Request $request)
    {

        return view('index',compact('cars'),compact('marques'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getForSale($slug=null)
    {
        $showcar=TblVehicle::where('slug', $slug)->firstOrFail();
        //$showcar=TblCarScrape::findOrFail($id);
        $car_reg=$showcar->registration;
        $images=LinkCarImage::where('registration','=', $car_reg)->get();
         return view('viewcar', ['car' => $showcar,'images'=>$images]);
 
    }

    /*
        filter section to refine selected cars.


     */
        public function filter(Request $request, User $motors)
        {
            $motors=$motors->newQuery();
            if ($request->has('model_type')) {
                $motors->where('model_type', $request->input('model_type'));
            }
            dd($motors);
            return $motors->get();
        }

    /**
     * Display the specified resource.
     *
     * @param  string  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($town=null,$make=null)
    {


    //          DB::enableQueryLog();
        $fred=Request::get('sort');
        $barney=Request::get('direction');
    //    dd($barney);

//  Finds slug in town table and display cars from there

        if ($town){

                $city=TblTown::where('town_slug','=',$town)->firstOrFail();
                $long=$city->longitude;
                $lat=$city->latitude;
                $client = new \GuzzleHttp\Client();
                $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=4999&limit=99');

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
        }
        if ($make){

            $checkedMake=TblMake::where('slug','=',$make)->firstOrFail();
            $make=$checkedMake->make;
        }
        if ($town&&$make){
// if both town and make are set
 
            $motors= TblDealer::join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')->where('tbl_vehicles.make','=',$make)->whereIn('tbl_dealer.outcode',$outcodes)->select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);


        }elseif($town){
// if only town is set
 
            $motors= TblDealer::join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')->whereIn('tbl_dealer.outcode',$outcodes)->select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->paginate(60);
        }else{
// if nothing is set
 
            $motors= TblVehicle::select('year','make','model','price','colour','fuel_type','doors','registration','mileage','slug')->orderBy($fred, $barney)->paginate(60);
    
        }
        $towns = TblTown::where('longitude','>','')->orderBy('town', 'ASC')->get();
        
 // $query = DB::getQueryLog();
//  dd($query);
        if ($barney=='desc'){
            $motors->setCollection($motors->sortByDesc($fred)); 
        }else{
            $motors->setCollection($motors->sortBy($fred)); 
        }
        
       // $motors->sortable()->paginate(24)  ;   
        return view('dealeritem',compact('motors','towns','city','checkedMake')); 

    }


}