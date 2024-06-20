<?php

use App\Livewire\Dashboard;
use App\Livewire\Users\Create;
use App\Livewire\Users\Edit;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', Dashboard::class)->name('dashboard');
Route::get('/pengguna', Index::class)->name('users.index');
Route::get('/pengguna/create', Create::class)->name('users.create');
Route::get('/pengguna/{id}/edit', Edit::class)->name('users.edit');