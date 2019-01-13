<?php

namespace App\Http\Controllers;

use App\Exceptions\AuthException;
use Symfony\Component\HttpFoundation\Request;

class ChildrenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function indexAction(Request $request)
    {
        $date = $request->get('date', date('Y-m-d'));
        try {
            $result = $this->getData(env('TARGET') . '/front/children/index', ['date' => $date]);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return view('cabinet.cabinet', $result['data']);
    }

    public function childAction(Request $request, $id)
    {
        $date = $request->get('date', date('Y-m-d'));

        try {
            $result = $this->getData(env('TARGET') . '/front/children/child', ['child_id' => $id, 'date' => $date]);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        return view('cabinet.child', $result['data']);
    }
}
