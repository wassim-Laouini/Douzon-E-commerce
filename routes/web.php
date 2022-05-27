<?php

use App\Http\Controllers\Admincontroller;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PagesController;
use App\Models\Admin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\ForgotPasswordController;



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
//Route::group(['middleware'=>'auth:web'],function(){
Route::get('/', [PagesController::class, 'home'])->name('home');

Route::get('/articles-shop', [PagesController::class, 'articles'])->name('shop');
Route::get('/articles-last', [PagesController::class, 'lastarticles'])->name('lastest');
Route::get('/product-detait', [PagesController::class, 'proddetait'])->name('prod');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/card-confermation', [PagesController::class, 'cardconfermation'])->name('confermation');
Route::get('/card-order-check', [PagesController::class, 'checkout'])->name('chekout-order');
Route::get('/Quantity-product', [PagesController::class, 'Quantityprod'])->name('Quantityprod');
Route::get('/blog-details', [PagesController::class, 'blogdetails'])->name('blog-details');
Route::get('/blog', [PagesController::class, 'blog'])->name('blog');
Route::get('/about-us', [PagesController::class, 'about'])->name('about');
Route::get('/log-out', [HomeController::class, 'logout'])->name('log.out');

//});
Route::group(['middleware'=>'guest:web'],function(){
Route::post('/login', [HomeController::class, 'loginin'])->name('login.welcome');
Route::get('/login-page', [PagesController::class, 'login'])->name('login');

Route::get('/reset', [PagesController::class, 'resetpassword'])->name('reset');
Route::get('/email', [PagesController::class, 'resetemail'])->name('email');
Route::get('/register-page', [PagesController::class, 'register'])->name('register.new');
Route::post('/create', [HomeController::class, 'create'])->name('create.new');
});
############end user zone####################################################
Route::get('/testing', [HomeController::class, 'test']);


###rezset p ssword###########################


Route::get('forget-password', [ForgotPasswordController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [ForgotPasswordController::class, 'submitForgetPasswordForm'])->name('forget.password.post'); 
Route::get('reset-password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [ForgotPasswordController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('success', [ForgotPasswordController::class, 'success'])->name('successemail'); 





##############################"



