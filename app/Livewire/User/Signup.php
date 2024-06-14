<?php

namespace App\Livewire\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\User;

class Signup extends Component
{
    #[Rule('string|required')]
    public string $name;

    #[Rule('email|required')]
    public string $email;

    #[Rule('string|required')]
    public string $password;
    public function store(Request $request)
    {
        $formData = $this->validate();

        $user = User::create($formData);

        Auth::login($user, true);

        return $this->redirect(route('dashboard'));
    }
    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.user.signup');
    }
}
