<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
})->name('home');

Route::get('user/{id}', function ($userId) {
    echo $userId;
});

Route::get('person_{name?}', function ($name = null) {
    echo $name;
});

Route::get('test/{id}', [TestController::class, 'test'])->name('test');

Route::get('wel/{user}', [TestController::class, 'showWelPage'])->name('wel');

Route::get('id{num?}', [UserController::class, 'getUser'])->name('user');

Route::get('form', [UserController::class, 'showForm'])->name('form');

Route::post('form_process', [UserController::class, 'form'])->name('form_process');