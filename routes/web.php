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
    Route::get('/login', Login::class)->name('login');
    Route::get('/signup', Signup::class)->name('signup');
    Route::post('/signup', [UserSignup::class, 'store'])->name('signup.store');
    Route::post('/login', [UserLogin::class, 'login'])->name('login.check');
    Route::get('/auth/{provider}', [OAuth::class, 'redirectToProvider'])->name('oauth');
    Route::get('/auth/{provider}/callback', [OAuth::class, 'handleProviderCallback']);
});


Route::group(['middleware' => 'auth'], static function () {
    Route::get('/logout', static function () {
        return (new Logout())->logout();
    })->name('auth.logout');
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

});
