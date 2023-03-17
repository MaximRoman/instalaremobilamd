<?php

namespace App\Http\Controllers;

use App\Mail\ComandaNoua;
use App\Models\NewContractModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request) {
        $id = $request->contract;
        $contract = NewContractModel::all()->where('id', '=', $id)->first();
        Mail::to('instalaremobilamd@mail.ru', 'instalare mobila md')->send(new ComandaNoua($contract->nume, $contract->telefon, $contract->adresa, $contract->mesaj), ['name' => 'instalare mobila md']);
        return redirect('/');
    }
}
