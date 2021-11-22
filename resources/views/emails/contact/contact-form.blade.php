@component('mail::message')
    <div dir="rtl">
        <strong>پست الکترونیک: </strong> {{ $data['email'] }}
    </div>
    <div dir="rtl">
        <strong>نام و نام خانوادگی: </strong> {{ $data['name'] }}
    </div>
    <div dir="rtl">
        <strong>پیام: </strong>
        <div>{{ $data['message'] }}</div>
    </div>
@endcomponent
