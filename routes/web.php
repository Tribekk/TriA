<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkerController;
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

//methods Pages
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::post('/' , 'homeForm');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/login', 'login')->name('login');
    Route::middleware('auth')->group(function () {
        Route::get('/profile', 'profile')->name('profile');
        Route::get('/password/update', 'passwordUpdate')->name('password-update');
        Route::middleware('role:admin')->group(function () {
            Route::get('/role', 'role')->name('role');
            Route::get('/edit/role/{role}', 'editRole')->name('edit.role');
            Route::get('/add/role', 'addRole')->name('add.role');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/client', 'client')->name('client');
            Route::get('/edit/client/{client}', 'editClient')->name('edit.client');
            Route::get('/add/client', 'addClient')->name('add.client');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/category', 'category')->name('category');
            Route::get('/edit/category/{category}', 'editCategory')->name('edit.category');
            Route::get('/add/category', 'addCategory')->name('add.category');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/product', 'product')->name('product');
            Route::get('/edit/product/{product}', 'editProduct')->name('edit.product');
            Route::get('/add/product', 'addProduct')->name('add.product');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/order', 'orders')->name('order');
            Route::get('/order/{order}', 'order')->name('order-order');
        });
        Route::middleware('role:admin')->group(function () {
            Route::get('/worker', 'worker')->name('worker');
            Route::get('/edit/worker/{worker}', 'editWorker')->name('edit.worker');
        });
    });
});

//methods Users
Route::controller(UserController::class)->group(function () {
    Route::post('/signup', 'signup');
    Route::post('/login', 'login');
    Route::middleware('auth')->group(function () {
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/profile', 'update');
        Route::post('/password/update', 'passwordUpdate');
    });
});

//methods Roles
Route::controller(RoleController::class)->group(function () {
    Route::post('/edit/role/{role}', 'edit');
    Route::post('/add/role', 'add');
    Route::get('delete/role/{role}', 'delete')->name('delete.role');
});

//methods Client
Route::controller(ClientController::class)->group(function () {
    Route::post('/edit/client/{client}', 'edit');
    Route::post('/add/client', 'add');
    Route::get('delete/client/{client}', 'delete')->name('delete.client');
});

//methods Category
Route::controller(CategoryController::class)->group(function () {
    Route::post('/edit/category/{category}', 'edit');
    Route::post('/add/category', 'add');
    Route::get('delete/category/{category}', 'delete')->name('delete.category');
});

//methods Product
Route::controller(ProductController::class)->group(function () {
    Route::post('/edit/product/{product}', 'edit');
    Route::post('/add/product', 'add');
    Route::get('delete/product/{product}', 'delete')->name('delete.product');
});

//methods Order
Route::controller(OrderController::class)->group(function () {
    Route::post('/order/{order}', 'submit');
});

//methods Worker
Route::controller(WorkerController::class)->group(function () {
    Route::post('/edit/worker/{worker}', 'edit');
    Route::get('delete/worker/{user}', 'delete')->name('delete.worker');
});
