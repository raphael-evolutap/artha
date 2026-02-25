<?php

namespace App\Livewire;

use App\Mail\Contact;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactForm extends Component
{
    public $style;

    public $nome;

    public $sobrenome;

    public $email;

    public $whatsapp;

    public $empresa;

    public $cidade_estado;

    public $mail_sent = false;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        Mail::to('raphael.botelho@evolutap.com.br')
            ->send(new Contact([
                'nome' => $this->nome ?? '',
                'sobrenome' => $this->sobrenome ?? '',
                'email' => $this->email ?? '',
                'whatsapp' => $this->whatsapp ?? '',
                'empresa' => $this->empresa ?? '',
                'cidade_estado' => $this->cidade_estado ?? '',
            ]));

        $this->mail_sent = true;
    }

    public function resetForm()
    {
        $this->mail_sent = false;
        $this->resetExcept('style');
    }
}
