<?php

namespace App\Http\Controllers;

use Kozz\Laravel\Facades\Guzzle;

class RequestController
{
    public static function post($address, $data = [])
    {
        $token = session('token', null);

        $headers = [
            'Customer-User-Agent' => request()->userAgent(),
            'Customer-IP' => request()->ip(),
        ];

        if ($token != null) {
            $headers['Authorization'] = "Bearer $token";
        }

        $response = Guzzle::post($address, ['form_params' => $data, 'headers' => $headers]);

        if ($response->getStatusCode() != 200) {
            return false;
        }
        return json_decode(strval($response->getBody()), true);
    }

    public static function get($address, $data = [])
    {
        $token = session('token', null);
        $params = "?";
        foreach ($data as $key => $value) {
            $params .= "$key=$value&";
        }
        $params = substr($params, 0, strlen($params) - 1);

        $headers = [
            'Customer-User-Agent' => request()->userAgent(),
            'Customer-IP' => request()->ip(),
        ];

        if ($token != null) {
            $headers['Authorization'] = "Bearer $token";
        }

        $response = Guzzle::get($address . $params, ['headers' => $headers]);
        if ($response->getStatusCode() != 200) {
            return false;
        }
        return json_decode(strval($response->getBody()), true);
    }

    public static function postForApi($address, $data = [], $headers = [])
    {
        $headers['Customer-User-Agent'] = request()->userAgent();
        $headers['Customer-IP'] = request()->ip();
        $response = Guzzle::post($address, ['form_params' => $data, 'headers' => $headers]);
        return $response;
    }
}
