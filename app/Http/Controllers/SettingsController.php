<?php

namespace App\Http\Controllers;

use App\Exceptions\AuthException;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/settings/index');
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return view('cabinet.settings', $result['data']);
    }

    public function saveAction(Request $request)
    {
        try {
            $this->getData(env('TARGET') . '/front/settings/save', ['request' => $request->all()]);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return redirect(route('index'));
    }
}
