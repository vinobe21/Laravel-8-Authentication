<?php

use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;
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
    return view('Auth/login');
});

Route::post('Auth/check', [AuthController::class,'check'])->name('Auth.check');
Route::post('Auth/store', [AuthController::class,'store'])->name('Auth.store');
Route::get('Auth/logout', [AuthController::class,'logout'])->name('Auth.logout');

//Admin
Route::get('Admin/dashboard', [AuthController::class,'dashboard'])->name('Admin.dashboard');

Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get('Admin/dashboard', [AuthController::class,'dashboard'])->name('Admin.dashboard');

    Route::get('Auth/login', [AuthController::class,'login'])->name('Auth.login');
    Route::get('Auth/register', [AuthController::class,'register'])->name('Auth.register');
});
