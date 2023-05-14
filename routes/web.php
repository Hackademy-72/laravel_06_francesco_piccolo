<?php

use App\Http\Controllers\PublicController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\ThreadController;
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

Route::get('/', [PublicController::Class, 'homepage'])->name('homepage');

Route::get('/thread/index', [ThreadController::class, 'index'])->name('index');
Route::get('/thread/create', [ThreadController::class, 'create'])->name('create');
Route::post('/thread/store', [ThreadController::class, 'store'])->name('store');
Route::get('/thread/show/{thread}', [ThreadController::class, 'show'])->name('show');
Route::post('/thread/show/{thread}', [ThreadController::class, 'show'])->name('show');

Route::get('/reply/index', [ReplyController::class, 'index'])->name('reply_index');
Route::get('/reply/create', [ThreadController::class, 'create'])->name('reply_create');