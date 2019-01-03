@extends('cabinet.cabinet_base')

@section('content')
    <div class="container">
        <form class="w-25" method="post" action="{{route('settings')}}">
            @csrf
            <div class="form-control">
                <label>Уведомлять о проходе</label>
                <input type="checkbox" name="notification_of_access" value="1" {{($setting['notification_of_access'] == 1) ? 'checked' : '' }}>
            </div>
            <input type="submit" value="Сохранить">
        </form>
    </div>
@endsection
