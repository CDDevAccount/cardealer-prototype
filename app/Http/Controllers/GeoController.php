<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;

/*
RCM 04/12/2018 - For retrieving geolocation information

*/

class GeoController extends Controller
{
    public function index()
    {

        $client = new \GuzzleHttp\Client();
        $outcodes=array();
        $res = $client->get('https://api.postcodes.io/outcodes?lon=-4.317676&lat=55.875759=&radius=24999&limit=99');
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
        $codes=0;
        // Find the centroid of OutCode 
        'https://api.postcodes.io/outcodes/NR15';
        //use the url below to retrieve list of Outcodes within 25 KM of that centroid 
        'https://api.postcodes.io/outcodes?lon=1.26582311980033&lat=52.5031115607321&radius=24999&limit=99';
        //Retrieve a list of dealers having an Outcode in the result
        //
        $response = json_decode($res->getBody(),false);
   
       // return implode(",",$outcodes);
		return response()->json($outcodes);
	//	return $outcodes;

    }

/*
***************** ROUTINE FOR FINDING DEALERS WITHIN A LOCALITY

*/
    public function getLoc(Request $request)
    {
    dd($request);
    	// Verify get data is valid postcode
    	if (preg_match('/^(([gG][iI][rR] {0,}0[aA]{2})|((([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y]?[0-9][0-9]?)|(([a-pr-uwyzA-PR-UWYZ][0-9][a-hjkstuwA-HJKSTUW])|([a-pr-uwyzA-PR-UWYZ][a-hk-yA-HK-Y][0-9][abehmnprv-yABEHMNPRV-Y]))) {0,}[0-9][abd-hjlnp-uw-zABD-HJLNP-UW-Z]{2}))$/',$request->pcode)){
    		$postcode=$request->pcode;

    	}else{
    		$postcode='EC1A 1AA';

    	}
		$pos = strpos($postcode, ' ');
		$outcode=substr($postcode, 0, $pos);

    	// instantiate a Guzzle http client & get the longitude and latitude of Postcode
        $client = new \GuzzleHttp\Client();
        $res = $client->get('https://api.postcodes.io/postcodes?q='.$postcode);
        if ($res->getStatusCode()===200){
        	$results=json_decode($res->getBody(),true);
        	foreach($results as $entry)
			{
				if (is_array($entry)){
					foreach ($entry as $loc) {
						$long=$loc['longitude'];
						$lat=$loc['latitude'];
					}
				}
			}
        };

        // with the longitude and latitude, get the outcodes of the surrounding postcodes
        $outcodes=array();
        if ($long||$lat){
	        $res = $client->get('https://api.postcodes.io/outcodes?lon='.$long.'&lat='.$lat.'&radius=24999&limit=99');
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
        sort($outcodes);
        // Find the centroid of OutCode 
        'https://api.postcodes.io/outcodes/NR15';
        //use the url below to retrieve list of Outcodes within 25 KM of that centroid 
        'https://api.postcodes.io/outcodes?lon=1.26582311980033&lat=52.5031115607321&radius=24999&limit=99';
        //Retrieve a list of dealers having an Outcode in the result
        $inclause="'".implode("','",$outcodes)."'";
        $dealers = DB::table('tbl_dealer')
        	->join('tbl_vehicles','tbl_vehicles.did','=','tbl_dealer.id')
             ->select('name','tbl_dealer.phone','make','model','year','price')
             ->whereIn('outcode', $outcodes)->get();
  		 return response()->json($dealers);
 
    }
}