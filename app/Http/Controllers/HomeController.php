<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        return view('cabinet.select');
    }
}
