@extends('cabinet.cabinet_base')

@section('content')
    <div class="container content">
        <div class="row justify-content-center">
            <h2>Добавление родителя (представителя)</h2>
        </div>

        <div class="row justify-content-center text-center">
            <div class="object-editPer">
                <form method="POST" action="{{ route('additional-parents-add') }}">
                    @csrf
                    @if ($errors->has('error'))
                        <br><strong class="text-danger h4">{{ $errors->first('error') }}</strong>
                    @endif
                    <table class="table table-hover table-striped">
                        <tbody>
                        <tr>
                            <td>
                                *Телефон
                                @if ($errors->has('phone'))
                                    <br><strong class="text-danger">{{ $errors->first('phone') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="phone" placeholder="380710000000" pattern="38071[0-9]{7}"
                                       value="{{ old('phone') != null ? old('phone') : '38071' }}" class="text-dark"
                                       required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                *E-mail
                                @if ($errors->has('email'))
                                    <br><strong class="text-danger">{{ $errors->first('email') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="email" placeholder="user@mail.com" value="{{ old('email') }}"
                                       class="text-dark" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                *Фамилия
                                @if ($errors->has('surname'))
                                    <br><strong class="text-danger">{{ $errors->first('surname') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="surname" placeholder="Петров" value="{{ old('surname') }}"
                                       class="text-dark" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                *Имя
                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="name" placeholder="Иван" value="{{ old('name') }}"
                                       class="text-dark" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                *Отчество
                                @if ($errors->has('patronymic'))
                                    <br><strong class="text-danger">{{ $errors->first('patronymic') }}</strong>
                                @endif
                            </td>
                            <td>
                                <input type="text" name="patronymic" placeholder="Сидорович"
                                       value="{{ old('patronymic') }}"
                                       class="text-dark" required>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <div>
                        <label class="text-left h3" for="is_valid">*Подтверждаю, что предоставленные мной данные являются
                            достоверными</label>
                        <input type="checkbox" name="is_valid" id="is_valid" value="1" class="checkbox-1x" required>
                        @if ($errors->has('is_valid'))
                            <br><strong class="text-danger">{{ $errors->first('is_valid') }}</strong>
                        @endif
                    </div>
                    <p class="h3">Пожалуйста, укажите добавленному родителю(представителю) ребенка(детей) информацию о котором(которых) ему разрешено получать:</p>
                    <table class="table table-hover table-striped">
                        <thead>
                        <tr>
                            <td>ФИО</td>
                            <td>Школа</td>
                            <td>Класс</td>
                            <td>Разрешение</td>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parent['children'] as $child)
                            <tr>
                                <td>{{ $child['profile']['surname'] . " " . $child['profile']['name'] . " " . $child['profile']['patronymic'] }}</td>
                                <td>{{ $child['class']['school']['name'] }}</td>
                                <td>{{ $child['class']['name'] }}</td>
                                <td>
                                    <input type="checkbox" name="child-{{ $child['id'] }}" class="checkbox-2x" value="Yes">
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <input type="submit" class="btn btn-primary" value="Сохранить">
                    <p>* - отмечены поля обязательные для заполнения</p>
                </form>
            </div>
        </div>
    </div>



@endsection
