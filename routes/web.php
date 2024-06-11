<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{Login, Signup};
use App\Http\Controllers\User\{Signup as UserSignup, Login as UserLogin};
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', \App\Livewire\Dashboard::class)->name('dashboard');

Route::get('/login', Login::class)->name('auth.login');
Route::get('/signup', Signup::class)->name('auth.signup');


//User: with Form

Route::post('/signup/create', [UserSignup::class, 'store'])->name('user.create');

//User: With Laravel Socialite


Route::get('/auth/{provider}/redirect', [\App\Http\Controllers\User\Socialite\OAuth::class, 'redirect']);

Route::get('/auth/{provider}/callback', [\App\Http\Controllers\User\Socialite\OAuth::class, 'callback']);
