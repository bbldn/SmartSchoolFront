<?php

namespace App\Http\Controllers;

use App\Exceptions\AuthException;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AdditionalParentController extends Controller
{

    public function additionalParentAction()
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents');
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }
        return view('cabinet.additional_parents', $result['data']);
    }

    public function showAddAction()
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents');
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        return view('cabinet.additional_parents_add', $result['data']);
    }

    public function showEditAction($id)
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents/edit', ['id' => $id]);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] == false) {
            abort($result['code']);
        }

        $result['data']['action'] = route('additional-parents-edit-save');

        return view('cabinet.additional_parents_edit', $result['data']);
    }

    public function addAdditionalParentAction(Request $request)
    {
        if ($request->get('is_valid', -1) == -1) {
            throw ValidationException::withMessages(['is_valid' => 'Чтобы продолжить, установите флажок']);
        }

        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents/add', $request->all());
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] != true) {
            throw ValidationException::withMessages($result['errors']);
        }

        return redirect(route('additional-parents'));
    }

    public function editAdditionalParentAction(Request $request)
    {
        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents/edit_save', $request->all());
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] != true) {
            throw ValidationException::withMessages($result['errors']);
        }

        return redirect(route('additional-parents-edit', ['id' => $request->get('id')]));
    }

    public function deleteAdditionalParentAction(Request $request, $id)
    {
        $array = $request->all();
        $array['id'] = $id;

        try {
            $result = $this->getData(env('TARGET') . '/front/additional-parents/delete', $array);
        } catch (AuthException $e) {
            return $this->resetAuthAndRedirect();
        }

        if ($result['ok'] != true) {
            throw ValidationException::withMessages($result['errors']);
        }

        return redirect(route('additional-parents'));
    }

}
