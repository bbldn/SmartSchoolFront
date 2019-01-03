<?php

namespace App\Http\Controllers;

use Kozz\Laravel\Facades\Guzzle;

class RequestController
{
    public static function post($address, $data = [])
    {
        $token = session('token', null);
        if ($token != null) {
            $data['token'] = $token;
        }
        $response = Guzzle::post($address, ['form_params' => $data]);
        if ($response->getStatusCode() != 200) {
            return false;
        }
        return json_decode(strval($response->getBody()), true);
    }

    public static function get($address, $data = [])
    {
        $params = "?";
        foreach ($data as $key => $value) {
            $params .= "$key=$value&";
        }
        $params = substr($params, 0, strlen($params) - 1);
        $response = Guzzle::get($address . $params);
        if ($response->getStatusCode() != 200) {
            return false;
        }
        return json_decode(strval($response->getBody()), true);
    }
}
