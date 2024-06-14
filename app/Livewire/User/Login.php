<?php

namespace App\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{

    #[Rule('email|required')]
    public string $email;

    #[Rule('string|required')]
    public string $password;

    public function authenticate()
    {
        $formData = $this->validate();

        Auth::attempt($formData);

        return redirect(route('dashboard'));
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
//        dd(auth()->user());
        return view('livewire.user.login');
    }
}
