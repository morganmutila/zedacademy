<?php

namespace App\Http\Livewire;
use Laravel\Fortify\Contracts\CreatesNewUsers;


use Livewire\Component;

class SignupModal extends Component
{
    public $form = [];

    public function render()
    {
        return view('livewire.signup-modal');
    }

    public function createNewUser(CreatesNewUsers $createnewuser){

        $createnewuser->create($this->form);

        $this->dispatchBrowserEvent("account_created", ['message', 'Account created succefully']);
        return redirect()->to('/');
    }
}
