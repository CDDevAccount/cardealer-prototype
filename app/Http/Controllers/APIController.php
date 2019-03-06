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

        return response()->json($makes);
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
        return response()->json($models);
    }

    public function getBodyList(Request $request)
    {
        $value=false;
        $dealers=false;
        if ($request->session()->has('dealers')) {

            $value = session('dealers');
            $dealers=(is_array($value)?$value:false);

        }
           $types= DB::table('tbl_vehicles')
            ->select('model_type', DB::raw('count(*) as total'))
            ->groupBy('model_type')
           
           // ->where("model_family",$request->model_family)
            ->orderby('model_type')
            ->where([['make','=',$request->make],['model_family','=',$request->model_family]])
            ->whereIn('did',$dealers)
            // ->where("model_family",$request->model_type)
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
