<?php

namespace App\Http\Livewire;

use Livewire\Component;

class AbautComponent extends Component
{
    public function render()
    {
        return view('livewire.abaut-component')->layout('layouts.user-base');
    }
}
