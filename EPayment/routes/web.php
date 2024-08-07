<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;
use Psy\Readline\Transient;

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

Auth::routes();

Route::get('/home', \App\Livewire\Home::class)->name('home');

Route::prefix('/pengguna')->group(function() {
    Route::get('/', \App\Livewire\User\Index::class)->name('users.index');
    Route::get('/create', \App\Livewire\User\Create::class)->name('users.create');
    Route::get('/{id}/edit', \App\Livewire\User\Edit::class)->name('users.edit');
});

Route::prefix('/produk')->group(function() {
    Route::get('/', \App\Livewire\Product\Index::class)->name('products.index');
});

Route::prefix('/transaksi')->group(function() {
    Route::get('/', \App\Livewire\Transaction\Index::class)->name('transactions.index');
});

Route::prefix('/laporan')->group(function() {
    Route::get('/', \App\Livewire\Report\Index::class)->name('reports.index');
});