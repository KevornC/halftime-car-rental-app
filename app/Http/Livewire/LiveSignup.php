<?php

namespace App\Http\Livewire;

use Livewire\Component;

class LiveSignup extends Component
{

    public $show = false;
    public $firs, $last, $gend, $addr, $coun, $trn, $phon, $emai, $pass;

protected $listeners = [
  'show' => 'show'
];

public function show()
{
  $this->show = true;
}

//
    // public $viewForm=false;
    // public function render()
    // {
    //     return view('livewire.live-signup');
    // }

    // public function addMember(){

    // }
}
  