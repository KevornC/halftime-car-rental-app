<?php

namespace App\Http\Livewire;

use LivewireUI\Modal\ModalComponent;

class AddVehicle extends ModalComponent
{
    public function render()
    {
        return view('livewire.add-vehicle');
    }
}
