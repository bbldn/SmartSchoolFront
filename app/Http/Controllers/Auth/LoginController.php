<?php

namespace App\Http\Controllers\Auth;

use App\Exceptions\AuthException;
use App\Http\Controllers\RequestController;
use Illuminate\Http\Request;

class LoginController extends BaseController
{
    protected function redirectTo()
    {
        return route('index');
    }

    public function loginFirstStage(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }

        $data = $this->credentials($request);

        try {
            $result = $this->getData(env('TARGET') . '/auth/login/first-stage', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] == true) {
            $request->session()->put('sms_code', $result['data']['sms_code']);
            $request->session()->put('identifier', $result['data']['identifier']);
            return $this->sendCodeResponse();
        }

        $this->incrementLoginAttempts($request);
//        return $this->sendFailedLoginResponse($request);
        return $this->showLoginForm($result['errors']);
    }

    public function loginSecondStage(Request $request)
    {
        $this->validateCode($request);

        if (!$request->session()->has('identifier')) {
            return redirect(route('login'));
        }

        $data = [
            'sms_code' => $request->get('sms_code'),
            'identifier' => $request->session()->get('identifier'),
        ];

        try {
            $result = $this->getData(env('TARGET') . '/auth/login/second-stage', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] == true) {
            $request->session()->remove('identifier');
            $request->session()->remove('sms_code');

            $request->session()->put('token', $result['data']['token']);
            $request->session()->put('expire', $result['data']['expire']);
            return $this->sendLoginResponse($request);
        }
        return $this->showCodeForm($result['errors']);
    }

    public function logout(Request $request)
    {
//        RequestController::post(env('TARGET') . '/auth/logout');
        $request->session()->remove('token');
        $request->session()->remove('expire');
        return redirect($this->redirectTo());
    }

    public function back(Request $request)
    {
        $request->session()->remove('identifier');
        $request->session()->remove('sms_token');
        return redirect($this->redirectTo());
    }
}

