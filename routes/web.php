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
});*/
 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ownerregister', function () {
  return view('ownerregister');
})->name('ownerregister');
Route::post('register_owner', [LoginController::class, 'create_owner'])->name('owner.create');
Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {
  Route::resource('user', UserController::class);
  Route::resource('profile', ProfileController::class);
  Route::resource('Owner', OwnerController::class);
  Route::resource('role', RoleController::class);
  Route::post('user.approve/{id}', [UserController::class,'approve'])->name('user.approve');
  Route::post('user.disApprove/{id}', [UserController::class,'disApprove'])->name('user.disApprove');

});

Route::get('/', function () {
  return view('welcome');
}); 




Route::resource('hotels', App\Http\Controllers\HotelController::class);


Route::resource('rooms', App\Http\Controllers\RoomsController::class);


Route::resource('feedback', App\Http\Controllers\FeedbackController::class);


Route::resource('reservations', App\Http\Controllers\ReservationController::class);
