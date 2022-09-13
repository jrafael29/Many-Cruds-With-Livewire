<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Todo\CreateTodo;
use App\Http\Livewire\Home;


Route::middleware('auth')->group(function(){
    Route::get('/', Home::class)->name('home');

    Route::get('/to-do-list', function(){
        return view('todo');
    })->name('todo');
    
    Route::get('/users', function(){
        return view('users');
    })->name('users');
    
    Route::get('/profile', function(){
        return view('profile');
    })->name('profile');

    Route::get('/images', function(){
        return view('images');
    })->name('images');
});


Route::prefix('/')->group(base_path('routes/auth.php'));