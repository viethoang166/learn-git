<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PermissionGroupController;
use Illuminate\Support\Facades\Auth;

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

Auth::routes(['verify'=>true]);
Route::get('/', function () {
    return redirect('/home');
});

#Student
Route::get('/home', [HomeController::class, 'index'])->name('home');

#admin
Route::group(['prefix' => 'admin',  'middleware' => ['admin.verify','auth']], function () {

    #User
    #Route::resource('user', UserController::class);
    Route::get('user', [UserController::class,'index']);
    Route::get('user/add', [UserController::class,'add']);
    Route::post('user/add', [UserController::class, 'store']);

    #Email
    Route::get('user/email', [UserController::class, 'email']);
    Route::post('user/email', [UserController::class,'sendMailUserProfile'])->name('send');

    #Role
    Route::resource('role', RoleController::class);

    #Permission
    Route::resource('permission', PermissionController::class);

    #Permission Group
    Route::resource('permission_group', PermissionGroupController::class);

    #Product
    Route::resource('product', ProductController::class);

    #Ctegory
    Route::resource('category', CategoryController::class);
});
