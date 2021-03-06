<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TblCarScrape;
use App\Models\DealerTotal;
use App\Models\LinkCarImage;

use Illuminate\Support\Facades\DB;

class DashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            $dealerscores=DealerTotal::all();
            $marques= TblCarScrape::select('make')->distinct()->get();
            $marques = DB::table('tbl_car_scrape')
                 ->select('make', DB::raw('count(*) as total'))
                 ->groupBy('make')
                 ->get();
            $marques=$marques->sortBy('make');
           // $cars=TblCarScrape::where('dealer_post_code','>','')->orderBy('make')->paginate(25);
           // $cars=$cars->sortBy('make');
            return view('dash.index',compact('marques'), compact('dealerscores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  
        $showcar=TblCarScrape::findOrFail($id);
        $car_reg=$showcar->registration;
        $images=LinkCarImage::where('regnumber','=', $car_reg)->get();
         return view('viewcar', ['car' => $showcar,'images'=>$images]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
