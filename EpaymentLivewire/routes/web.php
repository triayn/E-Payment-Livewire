<?php

use App\Livewire\Dashboard;
use App\Livewire\Product\Index as ProductIndex;
use App\Livewire\Users\Create;
use App\Livewire\Users\Edit;
use App\Livewire\Users\Index;
use Illuminate\Support\Facades\Auth;
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

Route::prefix('/pengguna')->group(function() {
    Route::get('/', Index::class)->name('users.index');
    Route::get('/create', Create::class)->name('users.create');
    Route::get('{id}/edit', Edit::class)->name('users.edit');
});

Route::prefix('/product')->group(function() {
    Route::get('/', ProductIndex::class)->name('products.index');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
