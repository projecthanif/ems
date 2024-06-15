<?php

use Illuminate\Support\Facades\Route;
use App\Action\User\Logout;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/logout', static function () {
        return (new Logout())->logout();
    })->name('auth.logout');
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');

});
