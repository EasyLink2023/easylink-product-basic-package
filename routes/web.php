<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\PagesController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\IndexPageController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\ContactUsPageController;
use App\Http\Controllers\Admin\FaqsController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\generalSettingController;
use App\Http\Controllers\Admin\ServiceController;

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
Route::get('/blog/{slug}', [FrontendController::class, 'blogDeatil'])->name('blog.detail');

Route::post('/add-quote', [FrontendController::class, 'addQuote'])->name('add.quote');
Route::post('/add-contact-form', [FrontendController::class, 'addContactForm'])->name('add.contact.form');

// Route::get('/sitemap', [FrontendController::class, 'generateSiteMap'])->name('generate.sitemap');

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
    
    //Blogs route
    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/add-blog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/save-blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::post('/update-blog', [BlogController::class, 'update'])->name('blog.update');
    Route::get('/delete-blog/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');

    //Blogs route
    Route::get('/testimonial', [TestimonialController::class, 'index'])->name('testimonial.index');
    Route::get('/add-testimonial', [TestimonialController::class, 'create'])->name('testimonial.create');
    Route::post('/save-testimonial', [TestimonialController::class, 'store'])->name('testimonial.store');
    Route::get('/edit-testimonial/{id}', [TestimonialController::class, 'edit'])->name('testimonial.edit');
    Route::post('/update-testimonial', [TestimonialController::class, 'update'])->name('testimonial.update');
    Route::get('/delete-testimonial/{id}', [TestimonialController::class, 'destroy'])->name('testimonial.destroy');

    //get all quotes list
    Route::get('/all-quotes', [DashboardController::class, 'allQuotes'])->name('quotes.index');
    Route::get('/all-contact-form', [DashboardController::class, 'allContactFormData'])->name('contact-form.index');

    //seo manager
    Route::get('/seo', [SeoController::class, 'index'])->name('seo.index');
    Route::get('/edit-seo/{url}', [SeoController::class, 'edit'])->name('seo.edit');
    Route::post('/edit-seo', [SeoController::class, 'update'])->name('seo.update');

      //service route
      Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
      Route::get('/add-service', [ServiceController::class, 'create'])->name('service.create');
      Route::post('/save-service', [ServiceController::class, 'store'])->name('service.store');
      Route::get('/edit-service/{id}', [ServiceController::class, 'edit'])->name('service.edit');
      Route::post('/update-service', [ServiceController::class, 'update'])->name('service.update');
      Route::get('/delete-service/{id}', [ServiceController::class, 'destroy'])->name('service.destroy');

      //gallery
      Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
      Route::get('/add-gallery', [GalleryController::class, 'create'])->name('gallery.create');
      Route::post('/save-gallery', [GalleryController::class, 'store'])->name('gallery.store');
      Route::get('/delete-gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

      //faqs
      Route::get('/faqs', [FaqsController::class, 'index'])->name('faqs.index');
      Route::get('/add-faqs', [FaqsController::class, 'create'])->name('faqs.create');
      Route::post('/save-faqs', [FaqsController::class, 'store'])->name('faqs.store');
      Route::get('/delete-faqs/{id}', [FaqsController::class, 'destroy'])->name('faqs.destroy');
    
});
