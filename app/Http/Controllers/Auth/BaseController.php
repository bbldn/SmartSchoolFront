<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;

class BaseController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    protected function credentials(Request $request)
    {
        return $request->only([$this->username(), 'password']);
    }

    public function username()
    {
        return 'phone';
    }

    public function showLoginForm($errors = [])
    {
        return view('auth.login')->withErrors(new MessageBag($errors));
    }

    public function showCodeForm($errors = [])
    {
        dump(\request()->session()->get('sms_code'));
        return view('auth.code')->withErrors(new MessageBag($errors));
    }

    public function sendCodeResponse()
    {
        return redirect(route('code'));
    }

    protected function sendLoginResponse()
    {
        return redirect($this->redirectTo());
    }

    protected function validateCode(Request $request)
    {

        $request->validate(['sms_code' => 'required']);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|string',
            'password' => 'required|string',
        ]);
    }




}
