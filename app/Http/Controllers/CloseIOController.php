<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WpOrg\Requests\Requests;

class CloseIOController extends Controller
{
    public function close_io(Request $request)
    {
        $asin_url = ($request->ASIN__c == '') ? '-' : $request->ASIN__c;
        $phone_no = ($request->phone == '') ? '' : $request->phone;
        $country_code = ($request->Country_Code__c && $request->phone == '') ? '' : $request->Country_Code__c;
        $name = $request->last_name;
        $email = $request->email;
        $phone = $country_code.$phone_no;
        $services = $request->Strategy_Services__c;
        $brand = $request->Brand_Name__c;
        $monthly_revenue = $request->Monthly_Revenue__c;
        $asin = $asin_url;
        $contact_us = $request->How_would_you_like_us_to_contact_you__c;

        $lead = [
            "contacts" => [
                [
                    "name" => $name,
                    "title" => "Strategy Form",
                    "emails" => [
                        [
                            "email" => $email,
                        ]
                    ],
                    "phones" => [
                        [
                            "phone" => $phone,
                        ]
                    ],
                ]
            ],
            "custom.cf_Ik7mEuy85SXbCvcHRYndg5XDL3fr3O4UbtQ9zenX9mX" => $services,
            "custom.cf_V7utIfaOW78cOXEdQoRyVgbwQAqoUVRDxD3UgVQW45J" => $brand,
            "custom.cf_dAKtlig4IiiuGbh6F65al1fdPQNYlfgTdkGCuQYgFxZ" => $monthly_revenue,
            "custom.cf_Qg8u3z41Vy6Hbdm9SMYmpO6SPJIZBQVymNIwjUxPhpP" => $asin,
            "custom.cf_9KgtaL2R4mARDcFAja49IEnigAxpS8F1sBcjNayVgvZ" => $contact_us,
        ];

        $headers = array('Content-Type' => 'application/json');
        $options = array('auth' => array(config('services.closeio.key'), ''));
        $response = Requests::post('https://api.close.com/api/v1/lead/', $headers, json_encode($lead),  $options);
    }
}
