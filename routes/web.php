<?php

use App\Http\Controllers\DbTestController;
use App\Http\Controllers\NamesController;
use App\Http\Controllers\PostController;
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

Route::get('dbtest', [DbTestController::class, 'query'])->name('dbtest');

Route::get('names', [NamesController::class, 'index'])->name('names');
Route::get('names/create', [NamesController::class, 'create'])->name('createName');
Route::get('names/{id}/delete', [NamesController::class, 'delete'])->name('deleteName');
Route::get('names/{id}', [NamesController::class, 'show'])->name('names/id');



Route::get('posts', [PostController::class, 'create'])->name('posts');
Route::get('posts/deleteLast', [PostController::class, 'deleteLast'])->name('posts/deleteLast');