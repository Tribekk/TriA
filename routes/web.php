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
        Route::middleware('role:admin')->group(function () {
            Route::get('/role', 'role')->name('role');
            Route::get('/edit/role/{role}', 'editRole')->name('edit.role');
            Route::get('/add/role', 'addRole')->name('add.role');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/client', 'client')->name('client');
            Route::get('/edit/client/{client}', 'editClient')->name('edit.client')->middleware('can:Изменение клиентов');
            Route::get('/add/client', 'addClient')->name('add.client')->middleware('can:Изменение клиентов');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/category', 'category')->name('category');
            Route::get('/edit/category/{category}', 'editCategory')->name('edit.category')->middleware('can:Обновление категорий');
            Route::get('/add/category', 'addCategory')->name('add.category')->middleware('can:Добавление категорий');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/product', 'product')->name('product');
            Route::get('/edit/product/{product}', 'editProduct')->name('edit.product')->middleware('can:Добавление продукции');
            Route::get('/add/product', 'addProduct')->name('add.product')->middleware('can:Изменение клиентов');
        });
        Route::middleware('role:admin|manager|beginner')->group(function () {
            Route::get('/order', 'orders')->name('order')->middleware('can:Просмотр заявки');
            Route::get('/order/{order}', 'order')->name('order-order')->middleware('can:Просмотр заявки');
        });
        Route::middleware('role:admin')->group(function () {
            Route::get('/worker', 'worker')->name('worker');
            Route::get('/edit/worker/{worker}', 'editWorker')->name('edit.worker')->middleware('can:Изменение сотрудника');
        });
    });
});

//methods Users
Route::controller(UserController::class)->group(function () {
    Route::post('/signup', 'signup');
    Route::post('/login', 'login');
    Route::middleware('auth')->group(function () {
        Route::get('/delete', 'destroy')->name('delete');
        Route::get('/password', function () {
            return view('user/password');
        })->name('password');
        Route::get('/logout', 'logout')->name('logout');
        Route::post('/profile', 'update');
        Route::post('/password', 'password');
    });
});

//methods Roles
Route::middleware('role:admin')->group(function (){
    Route::controller(RoleController::class)->group(function () {
        Route::post('/edit/role/{role}', 'edit');
        Route::post('/add/role', 'add');
        Route::get('delete/role/{role}', 'delete')->name('delete.role');
    });
});

//methods Client
Route::controller(ClientController::class)->group(function () {
    Route::post('/edit/client/{client}', 'edit')->middleware('can:Изменение клиентов');
    Route::post('/add/client', 'add')->middleware('can:Изменение клиентов');
    Route::get('delete/client/{client}', 'delete')->name('delete.client')->middleware('can:Удаление клиентов');
});

//methods Category
Route::controller(CategoryController::class)->group(function () {
    Route::post('/edit/category/{category}', 'edit')->middleware('can:Обновление категорий');
    Route::post('/add/category', 'add')->middleware('can:Добавление категорий');
    Route::get('delete/category/{category}', 'delete')->name('delete.category')->middleware('can:Удаление категорий');
});

//methods Product
Route::controller(ProductController::class)->group(function () {
    Route::post('/edit/product/{product}', 'edit')->middleware('can:Обновление продукции');
    Route::post('/add/product', 'add')->middleware('can:Добавление продукции');
    Route::get('delete/product/{product}', 'delete')->name('delete.product')->middleware('can:Удаление продукции');
    Route::get('/user/product', 'show')->name('user.product');
});

//methods Order
Route::controller(OrderController::class)->group(function () {
    Route::post('/order/{order}', 'submit')->middleware('can:Ответ на заявки');
});

//methods Worker
Route::controller(WorkerController::class)->group(function () {
    Route::post('/edit/worker/{worker}', 'edit')->middleware('can:Изменение сотрудника');
    Route::get('delete/worker/{user}', 'delete')->name('delete.worker')->middleware('can:Удаление сотрудника');
});

//methods OrderList
Route::middleware('auth')->group(function (){
    Route::controller(\App\Http\Controllers\OrderListController::class)->group(function (){
        Route::get('/add/order/list/{id}', 'add')->name('add.order.list');
        Route::get('/cart', 'show')->name('cart');
        Route::get('/cart/plus/{id}', 'plus')->name('plus.id');
        Route::get('/cart/minus/{id}', 'minus')->name('minus.id');
        Route::get('/cart/delete/{id}', 'delete')->name('cart.delete');
        Route::post('/cart', 'create');
    });
});

