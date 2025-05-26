<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

public function send(ContactFormRequest $request)
{

    $data = $request->validated();
    $data['user_message'] = $data['message'];
    Mail::send('emails.contact', $data, function ($message) use ($data) {
        $message->to('ahmdkhaldnws105@gmail.com')
                ->subject('رسالة جديدة من نموذج الاتصال');
        $message->from($data['email'], $data['name']);
    });

    return back()->with('success', 'تم إرسال الرسالة بنجاح، شكراً لتواصلك معنا!');
}
}
