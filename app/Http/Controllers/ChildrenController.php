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

        $states = [0 => 'не активен', 1 => 'активен'];
        $result['data']['child']['key']['stateText'] = $states[$result['data']['child']['key']['state']];

        return view('cabinet.child', $result['data']);
    }

    public function reportAction(Request $request)
    {
        $data = [
            'child_id' => $request->get('child_id'),
            'startDate' => $request->get('startDate'),
            'finishDate' => $request->get('finishDate')
        ];

        try {
            $result = $this->getData(env('TARGET') . '/front/report/child', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        $contentDispositionType = ($request->get('save', 'no') == 'yes') ? 'attachment' : 'inline';
        $contentDisposition = sprintf('%s; filename="%s.pdf"', $contentDispositionType, $result['data']['title']);

        return response(base64_decode($result['data']['report']))
            ->header('Content-type', 'application/pdf')
            ->header('Content-Disposition', $contentDisposition);
    }

    public function getAccessByDateAction(Request $request)
    {
        $data = [
            'child_id' => $request->get('child_id'),
            'date' => $request->get('date')
        ];

        try {
            $result = $this->getData(env('TARGET') . '/front/children/access-by-date', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        return response()->json($result);
    }

    public function lockKeyAction(Request $request)
    {
        $data = [
            'child_id' => $request->get('child_id'),
        ];

        try {
            $result = $this->getData(env('TARGET') . '/front/key/lock', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        return response()->json($result);
    }

    public function unlockKeyAction(Request $request)
    {
        $data = [
            'child_id' => $request->get('child_id'),
        ];

        try {
            $result = $this->getData(env('TARGET') . '/front/key/unlock', $data);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        return response()->json($result);
    }
}
