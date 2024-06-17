<?php

use Illuminate\Support\Facades\Route;
use App\Action\User\Logout;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], static function () {
    Route::get('/logout', static function () {
        return (new Logout())->logout();
    })->name('auth.logout');
    Route::get('/dashboard', \App\Livewire\Dashboard::class)->name('dashboard');
});

//Route::get('/user/{user:email}', static function (User $user) {
//    return $user->github_id;
//});

Route::get('/user/{role}', static function (\App\Enums\Role $role) {
    $user = User::where([
        'role' => $role->value
    ])->get();
    dd($user);
})
    ->whereIn('role', \App\Enums\Role::cases());
