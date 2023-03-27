<?php

use App\Http\Controllers\Admin\AdminPanelSettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

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

//Auth Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'auth:admin'], function () {
    Route::get( '/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get( '/logout', [LoginController::class, 'logout'])->name('admin.logout');
    Route::get( '/adminPanelSetting/index', [AdminPanelSettingsController::class, 'index'])->name('admin.adminPanelSetting.index');

});

//Guest Routes
Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'guest:admin'], function () {
    Route::get( '/login', [LoginController::class, 'index'])->name('admin.home');
    Route::post( '/login', [LoginController::class, 'login'])->name('admin.login');
});
