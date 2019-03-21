<?php

namespace App\Http\Controllers;


use App\Exceptions\AuthException;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        try {
            $result = $this->getData(env('TARGET') . '/front');
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return view('cabinet.select', $result['data']);
    }
}
