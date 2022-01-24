<?php

namespace App\Http\Livewire;

use Livewire\Component;

class SignupModal extends LiveSignup
{
    public function render()
    {
        return view('livewire.signup-modal');
    }
    public $message = '';

public function mount()
{
  $this->message = 'Welcome to the reusable modal example';
}
}
