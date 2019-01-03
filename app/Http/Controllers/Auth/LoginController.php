<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Controllers\RequestController;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo()
    {
        return route('index');
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'phone';
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            $this->sendLockoutResponse($request);
        }

        $code = $this->generateCode();
        $data = $this->credentials($request);
        $data['sms_token'] = $code;
        $result = RequestController::post(env('TARGET') . '/front/login', $data);
        if ($result['ok'] == true) {
            $request->session()->put($this->username(), $data[$this->username()]);
            $request->session()->put('password', $data['password']);
            $request->session()->put('code', $code);
            return $this->sendCodeResponse();
        }
        $this->incrementLoginAttempts($request);
        return $this->sendFailedLoginResponse($request);
    }

    public function code(Request $request)
    {
        $this->validateCode($request);

        if (!$request->session()->has($this->username()) || !$request->session()->has('password')) {
            return redirect(route('login'));
        }
        $data = [$this->username() => $request->session()->get($this->username()),
            'password' => $request->session()->get('password'),
            'sms_token' => $request->get('code')];
        $result = RequestController::post(env('TARGET') . '/front/code', $data);

        if ($result['ok'] == true) {
            $request->session()->remove($this->username());
            $request->session()->remove('password');
            $request->session()->remove('code');

            $request->session()->put('token', $result['data']['token']);
            return $this->sendLoginResponse($request);
        }else{
            dump($result['errors']);
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    private function generateCode()
    {
        return rand(10000, 99999);
    }

    public function sendCodeResponse()
    {
        return redirect(route('code'));
    }

    public function showCodeForm(Request $request)
    {
        if (!$request->session()->has('code')) {
            return redirect(route('login'));
        }
        dump($request->session()->get('code'));
        return view('auth.code');
    }

    protected function validateCode(Request $request)
    {
        $request->validate(['code' => 'required']);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request)
    {
        $request->session()->remove('token');
        return redirect($this->redirectTo());
    }

    private function credentials(Request $request)
    {
        return $request->only([$this->username(), 'password']);
    }

    protected function sendLoginResponse(Request $request)
    {
        return redirect($this->redirectTo());
    }
}

