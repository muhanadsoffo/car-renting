<?php

use App\Http\Controllers\AdminPanel\ReservationController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AdminPanel\ImageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\ProductController as AdminProductsController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ProfileContorller;
use App\Http\Controllers\AdminPanel\MessageController;
use App\Http\Controllers\UserController as UserController;



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




//             ............................. ROUTES ARE HERE..........................

Route::get('/test',[HomeController::class,'test'])->name('test');
Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/about',[HomeController::class,'about'])->name('about');


// new route
Route::get('/products',[HomeController::class,'products'])->name('products');
Route::get('/detail/{pid}',[HomeController::class,'detail'])->name('detail');
Route::get('/searched',[HomeController::class,'searched'])->name('searched');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');
Route::post('/storemessage',[HomeController::class,'storemessage'])->name('storemessage');
Route::get('/message',[HomeController::class,'message'])->name('message');
Route::post('/reservation', [HomeController::class, 'reservation'])->name('reservation');
Route::get('/book', [HomeController::class, 'book'])->name('book');
Route::get('/category/{CategoryTitle}', [HomeController::class, 'category'])->name('category');
Route::get('/allcategories',[HomeController::class,'allcategories'])->name('allcategories');

//            .............................AdminPanel Routes..............................

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/index',[AdminHomeController::class,'index'])->name('index');

//            .............................Admin Category Routes..............................
    Route::prefix('category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    //            .............................Admin Product Routes..............................

    Route::prefix('product')->name('product.')->controller(AdminProductsController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/create','create')->name('create');
        Route::post('/store','store')->name('store');
        Route::get('/edit/{id}','edit')->name('edit');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });

    //            .............................Admin Image Routes..............................
    Route::prefix('image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}','index')->name('index');
        Route::post('/store/{pid}','store')->name('store');
        Route::get('/destroy/{pid}/{id}','destroy')->name('destroy');

    });
    //           ...........................ADMIN MESSAGE ROUTS.................................
    Route::prefix('message')->name('message.')->controller(MessageController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::post('/store','store')->name('store');
        Route::get('/reply/{id}/{userId}','reply')->name('reply');
        Route::get('/destroy/{id}','destroy')->name('destroy');
        Route::get('/show/{id}','show')->name('show');
        Route::post('/reply/{id}/{userId}','reply')->name('reply');

    });
    //-------------------------------------- user controller routes -----------------------------------------

        Route::get('/all-user', [UserController::class, 'alluser'])->name('alluser');
        Route::get('/add-user-index', [UserController::class, 'adduserindex'])->name('adduserindex');
        Route::post('/insert-user', [UserController::class, 'insertuser'])->name('insertuser');
        Route::get('/edituser/{id}', [UserController::class, 'edituser'])->name('edituser');
        Route::post('/update-user/{id}', [UserController::class, 'updateuser'])->name('updateuser');
        Route::get('/delete-user/{id}', [UserController::class, 'deleteuser'])->name('deleteuser');

        //--------------------------------------Reservation routes---------------------------
    Route::prefix('reservation')->name('reservation.')->controller(ReservationController::class)->group(function () {
        Route::get('/','index')->name('index');
        Route::get('/approve/{id}','show')->name('approve');
        Route::post('/update/{id}','update')->name('update');
        Route::get('/show/{id}','show')->name('show');
        Route::get('/destroy/{id}','destroy')->name('destroy');

    });



});


//            .............................Login , Register and profile routes..............................
Route::get('/login', [AuthManager::class,'login'])->name('login');
Route::post('/login', [AuthManager::class,'loginpost'])->name('login.post');
Route::get('/register', [AuthManager::class,'register'])->name('register');
Route::post('/register', [AuthManager::class,'registerpost'])->name('register.post');
Route::get('/logout',[AuthManager::class,'logout'])->name('logout');

//            ............................. profile routes..............................
Route::get('/change-Password', [ProfileContorller::class,'changePassword'])->name('changePassword');
Route::post('/change-password', [ProfileContorller::class, 'updatePassword'])->name('update-password');
Route::get('/edit-profile',[ProfileContorller::class,'editProfile'])->name('editProfile');
Route::post('/edit-profile',[ProfileContorller::class,'updateProfile'])->name('updateProfile');


//------------------------------------- admin login routes-----------------------------

Route::prefix('/admin')->group(function(){
Route::get('/login', [AdminController::class,'adminlogin'])->name('admin.login');
Route::post('/login', [AdminController::class,'adminloginpost'])->name('admin.login.post');
Route::get('/register', [AdminController::class,'adminregister'])->name('admin.register');
Route::post('/register', [AdminController::class,'adminregisterpost'])->name('admin.register.post');
Route::get('/logout',[AdminController::class,'adminlogout'])->name('admin.logout');

});
