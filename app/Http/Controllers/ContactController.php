<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.create');
    }

    public function store()
    {
        $data = \request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        Mail::to('support@test.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('message', 'پیغام شما با موفقیت ارسال شد در اسرع وقت پاسخ داده خواهد شد');
    }
}
