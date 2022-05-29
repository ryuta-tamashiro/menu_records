<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\MembersController;
use App\Http\Controllers\MenusController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'index'])->name('home');
// ユーザー
Route::get('/users', [UsersController::class, 'index'])->name('users');
// 会員
Route::get('/members', [MembersController::class, 'index'])->name('members');
// メニュー
Route::get('/menus', [MenusController::class, 'index'])->name('menus');
Route::get('/menus/new', [MenusController::class, 'new'])->name('menus.new');
Route::post('/menus/create', [MenusController::class, 'create'])->name('menus.create');
