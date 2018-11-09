<?php

namespace Nirbhay\Hubspot\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{

    public function contacts()
    {
        $hapikey = config('hubspot.hapikey');
        $endpoint = 'https://api.hubapi.com/contacts/v1/lists/all/contacts/all?hapikey=' . $hapikey;
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
//        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        $curl_errors = curl_error($ch);
        @curl_close($ch);
        return $response;
    }

    public function createContact(Request $request)
    {
        $arr = array(
            'properties' => array(
                array(
                    'property' => 'email',
                    'value' => $request->get('email','')
                ),
                array(
                    'property' => 'firstname',
                    'value' => $request->get('firstname','')
                ),
                array(
                    'property' => 'lastname',
                    'value' => $request->get('lastname','')
                ),
                array(
                    'property' => 'phone',
                    'value' => $request->get('phone','')
                ),
                array(
                    'property' => 'website',
                    'value' => $request->get('website','')
                ),
                array(
                    'property' => 'company',
                    'value' => $request->get('company','')
                ),
                array(
                    'property' => 'address',
                    'value' => $request->get('address','')
                ),
                array(
                    'property' => 'city',
                    'value' => $request->get('city','')
                ),
                array(
                    'property' => 'state',
                    'value' => $request->get('state','')
                ),
                array(
                    'property' => 'zip',
                    'value' => $request->get('zip','')
                )
            )
        );
        $post_json = json_encode($arr);
        $hapikey = config('hubspot.hapikey');
        $endpoint = 'https://api.hubapi.com/contacts/v1/contact?hapikey=' . $hapikey;
        $ch = @curl_init();
        @curl_setopt($ch, CURLOPT_POST, true);
        @curl_setopt($ch, CURLOPT_POSTFIELDS, $post_json);
        @curl_setopt($ch, CURLOPT_URL, $endpoint);
        @curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        @curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = @curl_exec($ch);
//        $status_code = @curl_getinfo($ch, CURLINFO_HTTP_CODE);
//        $curl_errors = curl_error($ch);
        @curl_close($ch);
        return $response;
    }

}