<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{Login, Signup};
use App\Http\Controllers\User\{Signup as UserSignup, Login as UserLogin};
use App\Http\Controllers\User\Socialite\OAuth;
use App\Action\User\Logout;

Route::get('/', function () {
    return view('welcome');
});


Route::group(['middleware' => 'guest'], static function () {
    Route::get('/login', Login::class)->name('auth.login');
    Route::get('/signup', Signup::class)->name('auth.signup');
    Route::post('/signup', [UserSignup::class, 'store'])->name('auth.signup.store');
    Route::post('/login', [UserLogin::class, 'login'])->name('auth.login.store');
    Route::get('/oauth/{provider}', [OAuth::class, 'redirectToProvider'])->name('auth.oauth');
    Route::get('/oauth/{provider}/callback', [OAuth::class, 'handleProviderCallback']);
});


Route::group(['middleware' => 'auth'], static function () {
    Route::get('/logout', static function () {
        return (new Logout())->logout();
    })->name('auth.logout');
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

});
