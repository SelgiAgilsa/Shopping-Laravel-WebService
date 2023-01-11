<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdproductsController;
use App\Http\Controllers\AdcategorysController;
use App\Http\Controllers\AdordersController;
use App\Http\Controllers\AdordertrackhistorysController;
use App\Http\Controllers\AdsubcategorysController;
use App\Http\Controllers\AdproductreviewsController;
use App\Http\Controllers\AduserlogsController;
use App\Http\Controllers\AdwishlistsController;
use App\Http\Controllers\AdadminsController;
use App\Http\Controllers\AdusersController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\LoginController;
//USER


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

Route::get('/', [PagesController::class, 'home']);
Route::get('/menu', [PagesController::class, 'menu']);
Route::get('/checkout', [PagesController::class, 'checkout']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/dashboard', [PagesController::class, 'dashboard']);

// Hak Akses Admin
Route::get('/products', [AdproductsController::class, 'index']);
Route::get('/products/create', [AdproductsController::class, 'create']);
Route::get('/products/{adproducts}', [AdproductsController::class, 'show']);
Route::post('/products', [AdproductsController::class, 'store']);
Route::delete('/products/{adproducts}', [AdproductsController::class, 'destroy']);
Route::get('/products/{adproducts}/edit', [AdproductsController::class, 'edit']);
Route::patch('/products/{adproducts}', [AdproductsController::class, 'update']);

Route::get('/categorys', [AdcategorysController::class, 'index']);
Route::get('/categorys/create', [AdcategorysController::class, 'create']);
Route::get('/categorys/{adcategorys}', [AdcategorysController::class, 'show']);
Route::post('/categorys', [AdcategorysController::class, 'store']);
Route::delete('/categorys/{adcategorys}', [AdcategorysController::class, 'destroy']);
Route::get('/categorys/{adcategorys}/edit', [AdcategorysController::class, 'edit']);
Route::patch('/categorys/{adcategorys}', [AdcategorysController::class, 'update']);

Route::get('/orders', [AdordersController::class, 'index']);
Route::get('/orders/create', [AdordersController::class, 'create']);
Route::get('/orders/{adorders}', [AdordersController::class, 'show']);
Route::post('/orders', [AdordersController::class, 'store']);
Route::delete('/orders/{adorders}', [AdordersController::class, 'destroy']);
Route::get('/orders/{adorders}/edit', [AdordersController::class, 'edit']);
Route::patch('/orders/{adorders}', [AdordersController::class, 'update']);

Route::get('/ordertrackhistorys', [AdordertrackhistorysController::class, 'index']);
Route::get('/ordertrackhistorys/create', [AdordertrackhistorysController::class, 'create']);
Route::get('/ordertrackhistorys/{adordertrackhistorys}', [AdordertrackhistorysController::class, 'show']);
Route::post('/ordertrackhistorys', [AdordertrackhistorysController::class, 'store']);
Route::delete('/ordertrackhistorys/{adordertrackhistorys}', [AdordertrackhistorysController::class, 'destroy']);
Route::get('/ordertrackhistorys/{adordertrackhistorys}/edit', [AdordertrackhistorysController::class, 'edit']);
Route::patch('/ordertrackhistorys/{adordertrackhistorys}', [AdordertrackhistorysController::class, 'update']);

Route::get('/subcategorys', [AdsubcategorysController::class, 'index']);
Route::get('/subcategorys/create', [AdsubcategorysController::class, 'create']);
Route::get('/subcategorys/{adsubcategorys}', [AdsubcategorysController::class, 'show']);
Route::post('/subcategorys', [AdsubcategorysController::class, 'store']);
Route::delete('/subcategorys/{adsubcategorys}', [AdsubcategorysController::class, 'destroy']);
Route::get('/subcategorys/{adsubcategorys}/edit', [AdsubcategorysController::class, 'edit']);
Route::patch('/subcategorys/{adsubcategorys}', [AdsubcategorysController::class, 'update']);

Route::get('/productreviews', [adproductreviewsController::class, 'index']);
Route::get('/productreviews/create', [adproductreviewsController::class, 'create']);
Route::get('/productreviews/{adproductreviews}', [adproductreviewsController::class, 'show']);
Route::post('/productreviews', [adproductreviewsController::class, 'store']);
Route::delete('/productreviews/{adproductreviews}', [adproductreviewsController::class, 'destroy']);
Route::get('/productreviews/{adproductreviews}/edit', [adproductreviewsController::class, 'edit']);
Route::patch('/productreviews/{adproductreviews}', [adproductreviewsController::class, 'update']);

Route::get('/userlogs', [AduserlogsController::class, 'index']);
Route::get('/userlogs/create', [AduserlogsController::class, 'create']);
Route::get('/userlogs/{aduserlogs}', [AduserlogsController::class, 'show']);
Route::post('/userlogs', [AduserlogsController::class, 'store']);
Route::delete('/userlogs/{aduserlogs}', [AduserlogsController::class, 'destroy']);
Route::get('/userlogs/{aduserlogs}/edit', [AduserlogsController::class, 'edit']);
Route::patch('/userlogs/{aduserlogs}', [AduserlogsController::class, 'update']);

Route::get('/wishlists', [AdwishlistsController::class, 'index']);
Route::get('/wishlists/create', [AdwishlistsController::class, 'create']);
Route::get('/wishlists/{adwishlists}', [AdwishlistsController::class, 'show']);
Route::post('/wishlists', [AdwishlistsController::class, 'store']);
Route::delete('/wishlists/{adwishlists}', [AdwishlistsController::class, 'destroy']);
Route::get('/wishlists/{adwishlists}/edit', [AdwishlistsController::class, 'edit']);
Route::patch('/wishlists/{adwishlists}', [AdwishlistsController::class, 'update']);

Route::get('/admins', [AdadminsController::class, 'index']);
Route::get('/admins/create', [AdadminsController::class, 'create']);
Route::get('/admins/{adadmins}', [AdadminsController::class, 'show']);
Route::post('/admins', [AdadminsController::class, 'store']);
Route::delete('/admins/{adadmins}', [AdadminsController::class, 'destroy']);
Route::get('/admins/{adadmins}/edit', [AdadminsController::class, 'edit']);
Route::patch('/admins/{adadmins}', [AdadminsController::class, 'update']);

Route::get('/users', [AdusersController::class, 'index']);
Route::get('/users/create', [AdusersController::class, 'create']);
Route::get('/users/{adusers}', [AdusersController::class, 'show']);
Route::post('/users', [AdusersController::class, 'store']);
Route::delete('/users/{adusers}', [AdusersController::class, 'destroy']);
Route::get('/users/{adusers}/edit', [AdusersController::class, 'edit']);
Route::patch('/users/{adusers}', [AdusersController::class, 'update']);

Route::get('/menu', [UsersController::class, 'index']);
Route::get('/product1/{adproducts}', [UsersController::class, 'show']);

Route::get('/login/create', [LoginController::class, 'create']);
Route::post('/dashboard', [LoginController::class, 'store']);