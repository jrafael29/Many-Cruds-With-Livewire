<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Auth\Register as Register;
use App\Http\Livewire\Auth\Login as Login;
use App\Http\Controllers\Auth\AuthController as Auth;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


Route::get('/register', Register::class)->name('register');
Route::post('/register', [Auth::class, 'register'])->name('storeRegister');
Route::get('/login', Login::class)->name('login');
Route::post('/login', [Auth::class, 'login'])->name('attemptLogin');
Route::get('/logout', [Auth::class, 'logout'])->name('logout');


Route::get('/auth/google/redirect', function () {
    return Socialite::driver('google')
    ->redirect();
})->name('login.google.redirect');

Route::get('/auth/google/callback', function(){
    $googleUser = Socialite::driver('google')->user();

    $user = User::query()->firstOrCreate(['email' => $googleUser->email], [
        'name' => $googleUser->name,
        'password' => bcrypt(Str::random(10)),
    ]);
    $user->photo = $googleUser->avatar;
    $user->save();

    auth()->login($user);

    return redirect()->route('home');
});

