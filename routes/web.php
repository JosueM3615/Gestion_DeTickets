<?php

use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TicketController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [SessionController::class, 'index'])->name("login");
Route::post('/', [SessionController::class, 'login'])->name("login");

Route::get('/dashboard', [TicketController::class, 'index'])->name("inicio");
Route::get('/nuevoticket', [TicketController::class, 'VCrear'])->name("ticket.nuevo");
Route::get('/crear', [TicketController::class, 'store'])->name('ticket.store');
Route::post('/store', [TicketController::class, 'store'])->name('ticket.store');