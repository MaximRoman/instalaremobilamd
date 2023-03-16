<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail() {
        Mail::send(['text' => 'mail'], ['name' => 'instalaremobila.md'], function ($message) {
            $message->to('instalaremobilamd@mail.ru', 'Instalare mobila')->subject('Comandă nouă!');
            $message->from(env('MAIL_USERNAME'), env('MAIL_FROM_NAME'));
        });
        return redirect('/');
    }
}
