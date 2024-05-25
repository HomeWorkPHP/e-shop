<?php

use App\Http\Middleware\AdminAuthenticate;
use Illuminate\Support\Facades\Route;
use Modules\Admin\App\Http\Controllers\AdminController;
use Modules\Admin\App\Http\Controllers\AuthController;
use Modules\Admin\App\Http\Controllers\ProductController;

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

//Route::group([], function () {
//    Route::resource('admin', AdminController::class)->names('admin');
//});

Route::group([], function () {
    Route::prefix('admin')->group(function () {
        Route::get("login", [AuthController::class, "login"])->name("admin.login");
        Route::post("login-post", [AuthController::class, "loginPost"])->name("admin.login.post");

        Route::get("forgot_password", [AuthController::class, "forgotPassword"])->name("admin.forgot_password");

        Route::middleware([AdminAuthenticate::class])->group(function () {
            Route::prefix('product')->group(function () {
                Route::get("index", [ProductController::class, "index"])->name("admin.product.index");
                Route::get("create", [ProductController::class, "create"])->name("admin.product.create");
                Route::get("edit/{id}", [ProductController::class, "edit"])->name("admin.product.edit");
            });

            Route::prefix('profileAdmin')->group((function () {
                Route::get("index", [AdminController::class, "index"])->name("admin.profileAdmin.index");
                Route::get("create", [AdminController::class, "create"])->name("admin.profileAdmin.create");
                Route::post("create", [AdminController::class, "store"])->name("admin.profileAdmin.store");
                Route::get("edit", [AdminController::class, "edit"])->name("admin.profileAdmin.edit");
                Route::get("delete/{id}", [AdminController::class, "destroy"])->name("admin.profileAdmin.delete");
            }));

            Route::get('logout', [AuthController::class, "logout"])->name("admin.logout");
        });
    });
});
