<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        $result = RequestController::post(env('TARGET') . '/front/settings/index');
        if ($result == false || $result['ok'] == false) {
            abort(500);
        }
        return view('cabinet.settings', $result['data']);
    }

    public function saveAction(Request $request)
    {
        $result = RequestController::post(env('TARGET') . '/front/settings/save', ['request' => $request->all()]);
        if ($result == false || $result['ok'] == false) {
            abort(500);
        }
        return redirect(route('index'));
    }
}
