<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FrontComponent extends Component
{
    public function render()
    {
        return view('livewire.front-component')->layout('layouts.user-base');
    }
}
