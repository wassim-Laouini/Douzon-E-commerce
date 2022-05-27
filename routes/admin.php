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
###############


########################### admin zone #################################
Route::group(['middleware'=>'adminauth:admin'],function(){
    Route::get('/home', [Admincontroller::class, 'index'])->name('admin.home');
   
    Route::get('/categories', [Admincontroller::class, 'adminindex'])->name('admin.categories.index');
    Route::get('/news', [Admincontroller::class, 'adminnews'])->name('admin.news.index');
    Route::get('/create', [Admincontroller::class, 'admincatecreate'])->name('admin.categories.create');
    Route::get('/admincreate', [Admincontroller::class, 'admincreate'])->name('admin.news.create'); 
    Route::get('/adminsedit', [Admincontroller::class, 'adminedit'])->name('admin.news.edit');
    Route::get('/categoriesedit/{id}', [Admincontroller::class, 'categedit'])->name('admin.categories.edit');
    Route::put('/categoriesedit/{id}', [Admincontroller::class, 'updatearticles'])->name('admin.categories.update');
    Route::get('/test', [Admincontroller::class, 'test'])->name('test');
    Route::get('/log-out', [AdminController::class, 'adminlogout'])->name('log.out');
    Route::post('/store-new', [Admincontroller::class, 'store'])->name('admin.news');
});
Route::group(['middleware'=>'guest:admin'],function(){


Route::post('/login-admin', [Admincontroller::class, 'adminloginin'])->name('admin.login');

Route::get('/check-admin', [Admincontroller::class, 'admin'])->name('login.admin');

});


###########################end admin zone #################################




