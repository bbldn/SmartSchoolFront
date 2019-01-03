<?php

namespace App\Http\Controllers;

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
        $result = RequestController::post(env('TARGET') . '/front/children/index', ['date' => $date]);
        if (!is_array($result) || $result['ok'] == false) {
            abort(500);
        }
        return view('cabinet.cabinet', $result['data']);
    }

    public function childAction(Request $request, $id)
    {
        $date = $request->get('date', date('Y-m-d'));
        $result = RequestController::post(env('TARGET') . '/front/children/child', ['child_id' => $id, 'date' => $date]);
        if (!is_array($result) || $result['ok'] == false) {
            abort(500);
        }
        return view('cabinet.child', $result['data']);
    }
}
