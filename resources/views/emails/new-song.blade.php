@component('mail::message')
    <div dir="rtl">
        <strong>ثبت آهنگ جدید</strong>
    </div>
    <div dir="rtl">
        <strong>نام کاربر: </strong> {{ $user['name'] }}
    </div>
    <div dir="rtl">
        <strong>نام آهنگ: </strong> {{ $song['name'] }}
    </div>
@endcomponent
