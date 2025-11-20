<?php

namespace App\Livewire;

use Livewire\Component;

class ContactForm extends Component
{
    public $style;

    public $nome;

    public $sobrenome;

    public $email;

    public $telefone;

    public $empresa;

    public $cidade_estado;

    public $mail_sent = true;

    public function render()
    {
        return view('livewire.contact-form');
    }

    public function submit()
    {
        // send mail logic here
    }
}
