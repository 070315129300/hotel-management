<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;

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



Route::get('/', [HomeController::class, 'index']);
Route::get('gallery', [HomeController::class, 'gallery']);
Route::get('about', [HomeController::class, 'about']);

Route::get('bookaroom', [HomeController::class, 'bookaroom']);

Route::get('room', [HomeController::class, 'room']);
Route::post('bookaroomguest', [GuestController::class, 'bookaroomguest']);
Route::get('addadmin', [AdminController::class, 'addadmin']);
Route::get('addstaff', [AdminController::class, 'addstaff']);
Route::get('alladmin',[AdminController::class, 'alladmin']);
Route::get('allguest', [AdminController::class,'allguest']);
Route::get('allstaff', [AdminController::class, 'allstaff']);
Route::post('insertaddmin', [AdminController::class, 'insertadmin']);
Route::post('insertstaff', [AdminController::class, 'insertstaff']);
Route::get('logout',[AdminController::class,'logout']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
