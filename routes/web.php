<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{Login, Signup};

Route::get('/', function () {
    return view('welcome');
});


Route::get('/test', \App\Livewire\Dashboard::class)->name('dashboard');

Route::get('/login', Login::class)->name('auth.login');
Route::get('/signup', Signup::class)->name('auth.signup');


//Route::post('/signup', [Login::class, 'store'])->name('auth.create.user');
