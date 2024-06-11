<?php

namespace App\Livewire\User;

use App\Http\Requests\User\CreateUserRequest;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Signup extends Component
{


    public function store(CreateUserRequest $request) {
        dd($request);
    }

    #[Layout('components.layouts.auth')]
    public function render()
    {
        return view('livewire.user.signup');
    }
}
