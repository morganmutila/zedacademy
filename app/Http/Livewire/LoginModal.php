<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LoginModal extends Component
{

    public $username = '';
    public $password = '';

    public function login(){
        dd("Its working");
    }


    public function render()
    {
        return view('livewire.login-modal');
    }
}
