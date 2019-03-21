<?php

namespace App\Http\Controllers;

use App\Exceptions\AuthException;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected function getData($address, $data = [])
    {
        $this->checkAndUpdateToken();

        $result = RequestController::post($address, $data);

        if (!is_array($result)) {
            abort(500);
        }

        if (!$result['ok']) {
            if (isset($result['status'])) {
                switch ($result['status']) {
                    case 304:
                    case 302:
                    case 300:
                        {
                            throw new AuthException('Error token');
                            break;
                        }
                    case 301:
                        {
                            $this->updateToken();
                            return $this->getData($address, $data);
                        }
                    case 403:
                        {
                            abort(403);
                        }
                }
            }
        }

        return $result;
    }

    protected function checkAndUpdateToken()
    {
        if (request()->session()->has('expire')) {
            $expire = request()->session()->get('expire');
            if (time() > $expire) {
                $this->updateToken();
            }
        }
    }

    protected function updateToken()
    {
        $result = RequestController::post(env('TARGET') . '/auth/token/refresh');

        if (!is_array($result)) {
            abort(500);
        }

        if ($result['ok'] == false) {
            throw new AuthException('Error token');
        }

        request()->session()->put('token', $result['data']['token']);
        request()->session()->put('expire', $result['data']['expire']);
    }

    protected function resetAuthAndRedirect()
    {
        request()->session()->remove('token');
        request()->session()->remove('expire');
        return redirect(route('login'));
    }


}
