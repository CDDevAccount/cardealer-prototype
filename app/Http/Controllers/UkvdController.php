<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Psr\Http\Message\ServerRequestInterface;


use App\Models\TblVehicle;

/*
==========[ API Usage Example - php ]==========
  
    Steps:
        1. Initialize a cURL session
        2. Construct a URL String using the base API URL, your required Package Name & the Vehicle Registration Mark
        3. Set cURL options
        4. Execute cURL session to get response
        5. Close cURL session
        6. Unserialize response - use json_decode($response, true) function to store in array.

    Useful Documentation:
        http://php.net/manual/en/book.curl.php

===============================================
 */

class UkvdController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function Index(Request $request)
    {
        // Init cURL session
        $curl = curl_init();

        // Set API Key
        $ApiKey = "c1ac06a4-b7da-4a4b-b458-8535580c647b";

        // Construct URL String
        $url = "https://uk1.ukvehicledata.co.uk/api/datapackage/%s?v=2&api_nullitems=1&key_vrm=%s&auth_apikey=%s";
        $url = sprintf($url, "VehicleData", "KM14AKK", $ApiKey); // Syntax: sprintf($url, "PackageName", "VRM", ApiKey);
        dd($url);
        // Note your package name here. There are 5 standard packagenames. Please see your control panel > weblookup or contact your account manager

        // Create array of options for the cURL session
        curl_setopt_array($curl, array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_SSL_VERIFYPEER => false,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET"
        ));

        // Execute cURL session and store the response in $response
        $response = curl_exec($curl);

        // If the operation failed, store the error message in $error
        $error = curl_error($curl);

        // Close cURL session
        curl_close($curl);

        // If there was an error, print it to screen. Otherwise, unserialize response and print to screen.
        if ($error) {
          echo "cURL Error: " . $error;
        } else {
          var_dump(json_decode($response, true)); // For demonstration purposes - Unserialize response & dump array contents to screen
        }
      }

      public function getVd()
      {
        /*
        VehicleData
        SpecAndOptionsData
        MotHistoryAndTaxStatusData
        */
        $reg='KM14AKK';
        $searchType='VehicleData';
        $apiKey='c1ac06a4-b7da-4a4b-b458-8535580c647b'; // Sandbox
        $client = new \GuzzleHttp\Client();
        $result= $client->get("https://uk1.ukvehicledata.co.uk/api/datapackage/$searchType?v=2&api_nullitems=1&key_vrm=$reg&auth_apikey=$apiKey");
        return $result;
      }
}
