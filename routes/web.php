<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\WebsiteController;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\User\AccountController;

// Admin Controllers
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\TeamController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\UserController;


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

// Route::get('/', 'Website\WebsiteController@index')->name('home');
// Website Routes
Route::get('/',[WebsiteController::class, 'index'])->name('home');
Route::get('/about-us',[WebsiteController::class, 'about'])->name('about');
Route::get('/services',[WebsiteController::class, 'services'])->name('services');
Route::get('/service/{id}/show',[WebsiteController::class, 'servicesShow'])->name('service.show');
Route::get('/contact-us',[WebsiteController::class, 'contact'])->name('contact');
Route::get('/login',[WebsiteController::class, 'login'])->name('login');
Route::get('/register',[WebsiteController::class, 'register'])->name('register');
Route::get('/reset',[WebsiteController::class, 'reset'])->name('reset');
Route::post('/message',[WebsiteController::class, 'mailSend'])->name('message');
Route::get('/denied',[WebsiteController::class, 'denied'])->name('denied');

// Auth Routes
Route::post('/register',[AuthController::class, 'registration'])->name('register');
Route::post('/login',[AuthController::class, 'login'])->name('login');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/reset', [AuthController::class, 'resetPass'])->name('reset');

// User Account Routes
Route::group(['prefix'=>'account','as'=>'account.', 'middleware' => ['auth', 'userPermission']], function(){
    Route::get('/dashboard',[AccountController::class, 'dashboard'])->name('dashboard');
    Route::post('/baby-add',[AccountController::class, 'addBabyInfo'])->name('baby.add');
    Route::get('/baby-suggestion',[AccountController::class, 'babySuggestion'])->name('baby.suggestion');
    Route::post('/update/profile',[AccountController::class, 'updateProfile'])->name('profile.update');
    Route::get('/vaccination',[AccountController::class, 'vaccination'])->name('baby.vaccination');
});

// Admin Routes
Route::group(['prefix'=>'admin','as'=>'admin.', 'middleware' => ['auth', 'adminPermission']], function(){
    Route::get('/dashboard',[MainController::class, 'dashboard'])->name('dashboard');

    Route::resource('services', ServicesController::class);
    Route::resource('section', SectionController::class);
    Route::resource('team', TeamController::class);
    Route::resource('gallery', GalleryController::class);
    Route::get('users', [UserController::class, 'index'])->name('users');

    Route::get('/banner',[BannerController::class, 'index'])->name('banner.index');
    Route::get('/banner/create',[BannerController::class, 'create'])->name('banner.create');
    Route::post('/banner',[BannerController::class, 'store'])->name('banner.store');
    Route::delete('/banner/{id}',[BannerController::class, 'destroy'])->name('banner.destroy');
});