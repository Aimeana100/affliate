<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class UserPackageComponent extends Component
{
    public function render()
    {
        return view('livewire.user.user-package-component')->layout('layouts.user-dashboard-base');
    }
}
