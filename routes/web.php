<?php

use App\Http\Livewire\AddReminder;
use App\Http\Livewire\Reminders;
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
    return "Hello world!";
})->name('home');

Route::get('/reminders', Reminders::class)->name('reminders');

Route::get('add-reminder', AddReminder::class)->name('add-reminder');
