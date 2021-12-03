@component('mail::message')
    <div dir="rtl">
        <strong>ثبت کاربر جدید</strong>
    </div>
    <div dir="rtl">
        <strong>نام کاربر: </strong> {{ $data['name'] }}
    </div>
    <div dir="rtl">
        <strong>ایمیل کاربر: </strong> {{ $data['email'] }}
    </div>
@endcomponent
