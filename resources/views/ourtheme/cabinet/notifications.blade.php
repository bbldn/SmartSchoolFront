@extends('cabinet.cabinet_base')

@section('links')
    <link rel="stylesheet" type="text/css" href="{{ asset('/themes/ourtheme/cabinet/css/valeraVersionCss/settings.css') }}">
@endsection

@section('content')
    <div class="container text-center">
        <form method="post" action="{{ route('notifications') }}" class="text-center">
            @csrf
            <table class="table">
                <tr>
                    <td>Уведомлять о проходе по СМС</td>
                    <td>
                        <input type="checkbox" class="form-check-input checkbox-1x" name="notification_of_access"
                               value="1" {{ (@$settings['notification_of_access'] == 1) ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td>Уведомлять о проходе в Telegram</td>
                    <td>
                        <input type="checkbox" class="form-check-input checkbox-1x"
                               name="notification_of_access_telegram"
                               value="1" {{ (@$settings['notification_of_access_telegram'] == 1) ? 'checked' : '' }}>
                    </td>
                </tr>
                {{--<tr>--}}
                    {{--<td>ChatId Telegram</td>--}}
                    {{--<td>--}}
                        {{--<input type="text" disabled name="telegram_chat_id" value="{{ @$setting['telegram_chat_id'] }}">--}}
                    {{--</td>--}}
                {{--</tr>--}}
            </table>
            <input class="" type="submit" value="Сохранить">
        </form>
    </div>
@endsection
