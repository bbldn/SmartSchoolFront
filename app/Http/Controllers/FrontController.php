<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function getFront(Request $request)
    {
        $address = env('TARGET') . "/" . $request->path();
        $headers = $this->getCustomerHeaders($request);
        $response = RequestController::postForApi($address, $request->all(), $headers);
        return response($response->getBody(), $response->getStatusCode(), $response->getHeaders());
    }


    protected function getCustomerHeaders(Request $request)
    {
        $headers = [];
        foreach ($request->headers->all() as $key => $value) {
            if (substr($key, 0, 2) == "U-") {
                $key = substr($key, 2, strlen($key) - 2);
                $headers[$key] = $value;
            }
        }
        return $headers;
    }
}
