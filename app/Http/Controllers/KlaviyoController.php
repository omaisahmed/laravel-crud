<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlaviyoController extends Controller
{
    public function klaviyoSms(){

        $phoneno = "+16135550164";
        $emailsms = "osama@outorigin.com";
       $client = new \GuzzleHttp\Client();
$data = [
        "profiles" => [
                [
                    "emails" => $emailsms,
                    "phone_number" => $phoneno,
                    
                ]
            ]
        ];

   $response = $client->request('POST', 'https://a.klaviyo.com/api/v2/list/SrKr4c/subscribe?api_key=pk_82fe5905b8f0506aa01f3acd6e451ad39b', [
  'body' => json_encode($data),
  'headers' => [
    'Accept' => 'application/json',
    'Content-Type' => 'application/json',
  ],
]);

dd($response);
    }
}
