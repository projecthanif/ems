<?php

namespace App\Http\Controllers\User\Socialite;

use App\Http\Controllers\Controller;
use Laravel\Socialite\Facades\Socialite;

class OAuth extends Controller
{
    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        $user = Socialite::driver($provider)->user();

        if($provider === 'github')
        {

        }

        dd($user);
    }


}
