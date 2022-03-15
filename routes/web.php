<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Models\User;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::Get('/Search',[App\Http\Controllers\SearchController::class, 'index']);
Route::Get('detail/{ID}',[App\Http\Controllers\DetailController::class, 'index'])->name('detail');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::POST('/Search', [App\Http\Controllers\SearchController::class,'fetch'])->name('search');
Route::Get('detail/',[App\Http\Controllers\DetailController::class, 'addfriend'])->name('addfriend');

