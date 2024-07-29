<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndexPageController;
use App\Http\Controllers\Admin\ContactUsPageController;
use App\Http\Controllers\Admin\generalSettingController;

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

Route::get('/{page?}', [FrontendController::class, 'homePage'])->name('index');
// Route::get('/contact-us', [FrontendController::class, 'contactUsPage'])->name('contact.us');

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

    //Index Page Admin Side
    Route::get('/index-page', [IndexPageController::class, 'index'])->name('index.page.index');
    Route::get('/index-create', [IndexPageController::class, 'create'])->name('index.page.create');
    Route::post('/index-store', [IndexPageController::class, 'store'])->name('index.page.store');
    Route::get('/index-edit/{id}', [IndexPageController::class, 'edit'])->name('index.page.edit');
    Route::post('/index-update', [IndexPageController::class, 'update'])->name('index.page.update');

    //Contact us page route
    Route::get('/contact-page', [ContactUsPageController::class, 'index'])->name('contact.page.index');
    Route::get('/contact-create', [ContactUsPageController::class, 'create'])->name('contact.page.create');
    Route::post('/contact-store', [ContactUsPageController::class, 'store'])->name('contact.page.store');
    Route::get('/contact-edit/{id}', [ContactUsPageController::class, 'edit'])->name('contact.page.edit');
    Route::post('/contact-update', [ContactUsPageController::class, 'update'])->name('contact.page.update');
    
    //Menu pages update
    Route::get('/menu-page-edit/{id}', [PagesController::class, 'editPage'])->name('page.edit');
    Route::post('/menu-page-update', [PagesController::class, 'updatePage'])->name('page.update');
    
});
