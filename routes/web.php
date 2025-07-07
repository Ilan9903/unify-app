<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\PublicProfile;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/{username}', PublicProfile::class);

require __DIR__.'/auth.php';
