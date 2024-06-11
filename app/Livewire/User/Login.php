<?php

namespace App\Livewire\User;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public function authenticate()
    {

    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.user.login');
    }
}
