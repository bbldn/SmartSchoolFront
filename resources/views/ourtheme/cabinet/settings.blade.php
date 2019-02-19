@extends('cabinet.cabinet_base')

@section('content')
    <div class="container text-center">
        {{--<a href="{{ route('additional-parents') }}" class="btn btn-primary">Дополнительные родители</a>--}}
        {{--<hr>--}}
        <form method="post" action="{{route('settings')}}" class="text-center">
            @csrf
            <table class="table">
                <tr>
                    <td>Уведомлять о проходе по СМС</td>
                    <td>
                        <input type="checkbox" class="form-check-input checkbox-1x" name="notification_of_access" value="1" {{ ($setting['notification_of_access'] == 1) ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td>Уведомлять о проходе в Telegram</td>
                    <td>
                        <input type="checkbox" class="form-check-input checkbox-1x" name="notification_of_access_telegram" value="1" {{ ($setting['notification_of_access_telegram'] == 1) ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td>ChatId Telegram</td>
                    <td>
                        <input type="text" name="telegram_chat_id" value="{{ $setting['telegram_chat_id'] }}">
                    </td>
                </tr>
            </table>
            <input class="" type="submit" value="Сохранить">
        </form>
    </div>
@endsection
