<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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


//Homepage
Route::get('/', function () {
    return redirect()->route('admin-dashboard');
});


//Dashboard
Route::prefix('dashboard')
    ->middleware(['auth:sanctum','admin'])
    ->group(function() {
        Route::get('/',[DashboardController::class, 'index'])->name('admin-dashboard');
        Route::resource('users', UserController::class);
    });

//midtrans relate


