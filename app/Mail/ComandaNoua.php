<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ComandaNoua extends Mailable
{
    use Queueable, SerializesModels;

    protected $nume;
    protected $telefon;
    protected $adresa;
    protected $mesaj;
    
    public function __construct($nume, $telefon, $adresa, $mesaj) {
        $this->nume = $nume;
        $this->telefon = $telefon;
        $this->adresa = $adresa;
        $this->mesaj = $mesaj;
    }

    public function build() {
        return $this->view('mail', [
                                        'nume' => $this->nume, 
                                        'telefon' => $this->telefon, 
                                        'adresa' => $this->adresa, 
                                        'mesaj' => $this->mesaj
                                    ]);
    }
}
