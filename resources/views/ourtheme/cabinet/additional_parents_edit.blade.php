@extends('cabinet.cabinet_base')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <h2>Редактирование родителя (представителя)</h2>
        </div>

        <div class="row justify-content-center text-center">
            <div class="object-editPer">
                <form method="POST" action="{{ route('additional-parents-edit-save') }}">
                    @csrf
                    @if ($errors->has('error'))
                        <br><strong class="text-danger h4">{{ $errors->first('error') }}</strong>
                    @endif
                    <table class="table table-hover table-striped">
                        <tbody>
                        <tr>
                            <td>
                                Телефон
                                @if ($errors->has('phone'))
                                    <br><strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="hidden" name="id" value="{{ $aparent['id'] }}">
                                <input type="text" name="phone" placeholder="380710000000" pattern="38071[0-9]{7}"
                                       value="{{ $aparent['user']['phone'] }}" class="text-dark"
                                       required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                E-mail
                                @if ($errors->has('email'))
                                    <br><strong class="text-danger">{{ $errors->first('email') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="email" placeholder="user@mail.com" value="{{ $aparent['user']['email'] }}"
                                       class="text-dark" required>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <input type="submit" class="btn btn-primary" value="Сохранить">
                </form>
            </div>
        </div>
    </div>



@endsection
