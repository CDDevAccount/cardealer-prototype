<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

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
      /*  $countries = DB::table("countries")
                    ->select("name","id")
                    ->get();
        */

       $makes = DB::table('tbl_vehicles')
                ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
        return response()->json($makes);
    }

    
    public function getModelList(Request $request)
    {

        $models = DB::table("tbl_vehicles")
                    ->select('model_family as model', DB::raw('count(*) as total'))
                    ->groupBy('model_family')
                    ->where("make",$request->make)
                   // ->select("name","id")
                    ->get();
        return response()->json($models);
    }

    public function getBodyList(Request $request)
    {
           $types= DB::table('tbl_vehicles')
            ->select('model_type')
            ->distinct()
            ->orderby('model_type')
            ->get();
            return response()->json($types);
    }

    public function getCityList(Request $request)
    {
        $cities = DB::table("cities")
                    ->where("state_id",$request->state_id)
                    ->select("name","id")
                    ->get();
        return response()->json($cities);
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

}
