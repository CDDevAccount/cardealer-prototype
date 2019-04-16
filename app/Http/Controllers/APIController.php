<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use App\Models\TblDealer;
/*
RCM 28/11/2018 - Filter makes and models
*/

class APIController extends Controller
{
    public function index()
    {
        return view('dependent_dropdown');
    }

    public function getMakeList(Request $request)
    {
        $value=false;
        $dealers=false;

        if ($request->session()->has('dealers')) {

            $value = session('dealers');
            $dealers=(is_array($value)?$value:false);

        }

        if (!$dealers){
          $makes = DB::table('tbl_vehicles')
                ->select('make', DB::raw('count(*) as total'))
                ->groupBy('make')
                ->get();
        }else{
            $makes = DB::table('tbl_vehicles')
                ->select('make', DB::raw('count(*) as total'))
                ->wherein('did',$dealers)
                ->groupBy('make')
                ->get();           
        }

        return response()->json(['makes'=>$makes]);
    }

    
    public function getModelList(Request $request)
    {
        $value=false;
        $dealers=false;
        if ($request->session()->has('dealers')) {

            $value = session('dealers');
            $dealers=(is_array($value)?$value:false);

        }

        if (!$dealers){
            $models = DB::table("tbl_vehicles")
                        ->select('model_family as model', DB::raw('count(*) as total'))
                        ->groupBy('model_family')
                        ->where("make",$request->make)
                       // ->select("name","id")
                        ->get();
        }else{

             $models = DB::table("tbl_vehicles")
                        ->select('model_family as model', DB::raw('count(*) as total'))
                        ->groupBy('model_family')
                        ->where("make",$request->make)
                        ->whereIn('did',$dealers)
                        ->get();           
        }
        return response()->json(['models'=>$models]);
    }

    public function getBodyList(Request $request)
    {
        $value=false;
        $dealers=false;
        if ($request->session()->has('dealers')) {

            $value = session('dealers');
            $dealers=(is_array($value)?$value:false);

        }elseif($dealers){
           $types= DB::table('tbl_vehicles')
            ->select('model_type', DB::raw('count(*) as total'))
            ->groupBy('model_type')
           
           // ->where("model_family",$request->model_family)
            ->orderby('model_type')
            ->where([['make','=',$request->make],['model_family','=',$request->model_family]])
            ->whereIn('did',$dealers)
            // ->where("model_family",$request->model_type)
            ->get();            
        }else{
           $types= DB::table('tbl_vehicles')
            ->select('model_type', DB::raw('count(*) as total'))
            ->groupBy('model_type')
            ->orderby('model_type')
            ->where([['make','=',$request->make],['model_family','=',$request->model_family]])
            ->get();
        }

            return response()->json(['bodies'=>$types]);
    }
    
    public function getCityList(Request $request)
    {
        $cities = DB::table("tbl_towns")
               //     ->where("id",$request->town_id)
                    ->select("town","id","town_slug","longitude","latitude","town_slug")
                    ->orderby("town")
                    ->get();
        return response()->json(['towns'=>$cities]);
    }


    public function getVehicleList(Request $request)
    {
        $motors=DB::table("tbl_vehicles")
                    ->select('*')
                    ->where("model_family",$request->model)
                   // ->select("name","id")
                    ->get();
        return response()->json($motors);
    }


    public function setDealerLocation()
    {
        $dealers=TblDealer::whereNull('longitude')->get();
        foreach($dealers as $dealer){
               // dd( $dealer->longitude);
                $coords= $this->getLonLat($dealer->postcode);
                $dealer->latitude=$coords->lat;
                $dealer->longitude=$coords->long;
                $dealer->save();

                                //dd($coords->lat);
        }

       // return response()->json($motors);
    }
    private static function getLonLat($pcode = false)
    {
          $coords = (object) [
            'long' => 0,
            'lat' => 0,
          ];
       //$coords= new coords();;
        if ($pcode){
                    // instantiate a Guzzle http client & get the longitude and latitude of Postcode
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://api.postcodes.io/postcodes?q='.$pcode);
        if ($res->getStatusCode()===200){
            $results=json_decode($res->getBody(),true);
            foreach($results as $entry)
            {
                if (is_array($entry)){
                    foreach ($entry as $loc) {
                        $coords->long=$loc['longitude'];
                        $coords->lat=$loc['latitude'];
                      //  $long=$loc['longitude'];
                       // $lat=$loc['latitude'];
                    }
                }
            }
        };
        }
       // dd($coords);
        return $coords;
    }
}
