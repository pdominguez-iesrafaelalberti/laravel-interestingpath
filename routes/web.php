<?php

use Illuminate\Support\Facades\Route;
use App\Models\Interestingpath;

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\InterestingpathController::class, 'index']);

Route::resource('interestingpath',App\Http\Controllers\InterestingpathController::class);
//Route::resource('like',App\Http\Controllers\LikeController::class);

Route::put('like/{user_id}/{intpath_id}/update', [App\Http\Controllers\LikeController::class, 'update'])->name('like.update');