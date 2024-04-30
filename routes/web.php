<?php
use App\Http\Controllers\MainController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;


use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/dashbord', [DashbordController::class, 'mydashbord'])->name('mydashbord');
Route::get('/dashbord/category/index', [DashbordController::class, 'categoryindex'])->name('category.index');
Route::get('/dashbord/category/creat', [DashbordController::class, 'categorycreat'])->name('category.creat');
Route::post('/dashbord/category/insert', [DashbordController::class, 'categoryinsert'])->name('category.insert');
Route::get('/dashboard/category/edit/{id}', [DashbordController::class, 'edit'])->name('category.edit');
//update
Route::put('/dashboard/category/update/{id}', [DashbordController::class, 'update'])->name('category.update');
//remove
Route::delete('/dashboard/category/remove/{id}', [DashbordController::class, 'remove'])->name('category.remove');



Route::get('/show', [ContactController::class, 'show'])->name('show');
Route::post('/showsend', [ContactController::class, 'send'])->name('contact.send');





Route::get('/dashbord/product/index', [ProductController::class, 'index'])->name('product.index');
Route::get('/dashbord/product/show', [ProductController::class, 'show'])->name('product.show');
Route::get('/dashbord/product/creat', [ProductController::class, 'productcreat'])->name('product.creat');
Route::post('/dashbord/product/insert', [ProductController::class, 'productinsert'])->name('product.insert');
Route::get('/dashboard/product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
//update
Route::put('/dashboard/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
//remove
Route::delete('/dashboard/product/remove/{id}', [ProductController::class, 'remove'])->name('product.remove');
//
Route::get('/test',function(){return view('test');});
//AjaxController  
Route::get('/creatAjax', [AjaxController::class, 'creatAjax'])->name('crreatAjax');
//Route::get('/ss', [AjaxController::class, 'creatAjax']);

Route::post('/storAjax', [AjaxController::class, 'storAjax'])->name('storAjax');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
