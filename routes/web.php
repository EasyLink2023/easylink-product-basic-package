<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\generalSettingController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\FrontendController;

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

//Fronend Routes

Route::get('/', [FrontendController::class, 'homePage'])->name('index');

Route::get('/add-admin-role', function () {
    $role = new Role;
    $role->role_name = 'admin';
    $role->save();
});

Auth::routes(['register'=>false]);


Route::group(['middleware' => 'auth', 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');

    // General Setting
    Route::get('/setting', [GeneralSettingController::class, 'index'])->name('setting.index');
    Route::get('/add-setting', [GeneralSettingController::class, 'create'])->name('setting.create');
    Route::post('/save-setting', [GeneralSettingController::class, 'store'])->name('setting.store');
    Route::get('/edit-setting/{id}', [GeneralSettingController::class, 'edit'])->name('setting.edit');
    Route::post('/update-setting', [GeneralSettingController::class, 'update'])->name('setting.update');

    //Menus route
    Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
    Route::get('/add-menu', [MenuController::class, 'create'])->name('menu.create');
    Route::post('/save-menu', [MenuController::class, 'store'])->name('menu.store');
    Route::get('/edit-menu/{id}', [MenuController::class, 'edit'])->name('menu.edit');
    Route::post('/update-menu', [MenuController::class, 'update'])->name('menu.update');
    Route::get('/delete-menu/{id}', [MenuController::class, 'destroy'])->name('menu.destroy');
});
