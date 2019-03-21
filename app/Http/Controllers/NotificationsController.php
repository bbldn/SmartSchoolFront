<?php

namespace App\Http\Controllers;

use App\Exceptions\AuthException;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction()
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/notifications/index');
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return view('cabinet.notifications', $result['data']);
    }

    public function saveAction(Request $request)
    {
        try {
            $this->getData(env('TARGET') . '/front/notifications/save', $request->all());
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return redirect(route('notifications'));
    }
}
