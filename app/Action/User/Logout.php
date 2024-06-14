<?php

namespace App\Action\User;

class Logout
{
    public function logout(): \Illuminate\Http\RedirectResponse
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
