<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\OwnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use Spatie\Permission\Contracts\Role;

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
/* 
Route::get('admin', function ($id) {
    return view('welcome');
});
 Route::get('/', function () {
  return view('ownerlogin');
}); */


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ownerregister', function () {
  return view('ownerregister');
})->name('ownerregister');
Route::post('register_owner', [LoginController::class, 'create_owner'])->name('owner.create');

Route::get('owner/login', [LoginController::class, 'login'])->name('owner.login');
Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
  Route::resource('user', UserController::class);
  Route::resource('hotel', HotelController::class);
  Route::resource('profile', ProfileController::class);
  Route::resource('Owner', OwnerController::class);
  Route::resource('role', RoleController::class);
});
