<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewContractModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'nume',
        'telefon',
        'adresa',
        'mesaj',
    ];

    protected $table = 'new_contract';
}
