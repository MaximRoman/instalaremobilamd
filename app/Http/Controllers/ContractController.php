<?php

namespace App\Http\Controllers;

use App\Models\NewContractModel;
use Illuminate\Http\Request;

class ContractController extends Controller
{
    public function createContract(Request $request) {
        $form = $request->validate([
            'nume' => ['required'],
            'telefon' => ['required'],
            'adresa' => ['required'],
            'mesaj'
        ]);

        $id = '';
        $id = NewContractModel::create($form)->id;
        return redirect('/mail/' . $id);
    }
}
