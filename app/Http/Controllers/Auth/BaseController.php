<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class BaseController extends Controller
{
    use AuthenticatesUsers;

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'phone';
    }

    public function showLoginForm()
    {
        return view('auth.login');
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

    protected function credentials(Request $request)
    {
        return $request->only([$this->username(), 'password']);
    }

    protected function sendLoginResponse(Request $request)
    {
        return redirect($this->redirectTo());
    }
}
