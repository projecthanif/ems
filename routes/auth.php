<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\{Login, Signup};
use App\Http\Controllers\User\Oauth\OAuth;


Route::get('/login', Login::class)->name('login');
Route::get('/signup', Signup::class)->name('signup');
Route::get('/auth/{provider}', [OAuth::class, 'redirectToProvider'])->name('oauth');
Route::get('/auth/{provider}/callback', [OAuth::class, 'handleProviderCallback']);






