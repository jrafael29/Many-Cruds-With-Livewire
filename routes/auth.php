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
    if(!$user->photo){
        $user->photo = $googleUser->avatar;
        $user->save();
    }

    auth()->login($user);

    return redirect()->route('home');
});

Route::get('/auth/github/redirect', function(){
    return Socialite::driver('github')->redirect();
})->name('login.github.redirect');

Route::get('/auth/github/callback', function(){
    $githubUser =  Socialite::driver('github')->user();

    $user = User::query()->firstOrCreate(['email' => $githubUser->email], [
        'name' => $githubUser->name,
        'password' => bcrypt(10),
    ]);
    if(!$user->photo){
        $user->photo = $githubUser->avatar;
        $user->save();
    }

    auth()->login($user);
    return redirect()->route('home');
});

