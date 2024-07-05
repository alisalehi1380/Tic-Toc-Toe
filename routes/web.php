<?php

use App\Http\Controllers\LogoutController;
use App\Livewire\Page\Dashboard\GamesPage;
use App\Livewire\Page\LandPage;
use App\Livewire\Page\LoginPage;
use App\Livewire\Page\SignUpPage;
use Illuminate\Support\Facades\Route;

Route::get('', LandPage::class)->middleware('guest')->name('page.land');
Route::get('login', LoginPage::class)->middleware('guest')->name('page.login');
Route::get('sign-up', SignUpPage::class)->middleware('guest')->name('page.signup');
Route::post('logout', [LogoutController::class, 'logout'])->middleware('auth')->name('logout');

Route::get('dashboard/games', GamesPage::class)->middleware('auth')->name('page.dashboard.games');
Route::get('dashboard/profile', GamesPage::class)->middleware('auth')->name('page.dashboard.profile');
Route::get('dashboard/transactions', GamesPage::class)->middleware('auth')->name('page.dashboard.transactions');
