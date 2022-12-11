<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

Route::get('/', [PagesController::class,'index'])->name('index');
Route::get('/crud/{id}', [PagesController::class,'crud'])->name('crud');
Route::post('/user/save', [PagesController::class, 'userSave']);
Route::get('/delete/{id}', [PagesController::class,'userdelete']);
Route::post('/user/new', [PagesController::class,'usernew']);
