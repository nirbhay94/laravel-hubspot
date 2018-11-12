<?php

namespace Nirbhay\Hubspot\Http\Controllers;

use App\Http\Controllers\Controller;

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
        @curl_close($ch);
        return $response;
    }

    public function createContact($request)
    {
        $arr = array(
            'properties' => array(
                array(
                    'property' => 'email',
                    'value' => isset($request['email']) ? $request['email'] : ''
                ),
                array(
                    'property' => 'firstname',
                    'value' => isset($request['firstname']) ? $request['firstname'] : ''
                ),
                array(
                    'property' => 'lastname',
                    'value' => isset($request['lastname']) ? $request['lastname'] : ''
                ),
                array(
                    'property' => 'phone',
                    'value' => isset($request['email']) ? $request['phone'] : ''
                ),
                array(
                    'property' => 'website',
                    'value' => isset($request['website']) ? $request['website'] : ''
                ),
                array(
                    'property' => 'company',
                    'value' => isset($request['company']) ? $request['company'] : ''
                ),
                array(
                    'property' => 'address',
                    'value' => isset($request['address']) ? $request['address'] : ''
                ),
                array(
                    'property' => 'city',
                    'value' => isset($request['city']) ? $request['city'] : ''
                ),
                array(
                    'property' => 'state',
                    'value' => isset($request['state']) ? $request['state'] : ''
                ),
                array(
                    'property' => 'zip',
                    'value' => isset($request['zip']) ? $request['zip'] : ''
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
        @curl_close($ch);
        return $response;
    }

}