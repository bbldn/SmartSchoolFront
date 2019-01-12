<?php

namespace App\Http\Controllers\Auth;

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
        $result = RequestController::post(env('TARGET') . '/auth/login/first-stage', $data);
        if ($result['ok'] == true) {
            $request->session()->put('sms_code', $result['data']['sms_code']);
            $request->session()->put('identifier', $result['data']['$result']);

            return $this->sendCodeResponse();
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    public function loginSecondStage(Request $request)
    {
        $this->validateCode($request);

        if (!$request->session()->has('identifier')) {
            return redirect(route('login'));
        }

        $data = [
            'sms_code' => $request->get('code'),
            'identifier' => $request->session()->get('identifier'),
        ];
        $result = RequestController::post(env('TARGET') . '/auth/login/second-stage', $data);

        if ($result['ok'] == true) {
            $request->session()->remove('identifier');

            $request->session()->put('token', $result['data']['token']);
            $request->session()->put('expire', $result['data']['expire']);
            return $this->sendLoginResponse($request);
        } else {
            dump($result['errors']);
        }
    }

    public function logout(Request $request)
    {
        RequestController::post(env('TARGET') . '/auth/logout');
        $request->session()->remove('token');
        return redirect($this->redirectTo());
    }
}

