<?php

namespace App\Http\Controllers\User\Socialite;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class OAuth extends Controller
{
    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $providerUser = Socialite::driver($provider)->user();


        if ($provider === 'github') {
            $user = User::updateOrCreate([
                'github_id' => $providerUser->id,
            ], [
                'name' => $providerUser->name,
                'email' => $providerUser->email,
                'github_token' => $providerUser->token,
                'github_refresh_token' => $providerUser->refreshToken,
            ]);

            Auth::login($user, true);

            return redirect(route('dashboard'))->with('message', 'account created');
        }

        if ($provider === 'google') {

            $user = User::updateOrCreate([
                'google_id' => $providerUser->id,
            ], [
                'name' => $providerUser->name,
                'email' => $providerUser->email,
                'google_token' => $providerUser->token,
                'google_refresh_token' => $providerUser->refreshToken,
            ]);

            Auth::login($user, true);

            return redirect(route('dashboard'))->with('message', 'account created');
        }


        return null;
    }


}
