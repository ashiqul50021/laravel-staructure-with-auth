<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.home');
});

/*------------------------------------------
--------------------------------------------
All Users Routes List
--------------------------------------------
--------------------------------------------*/

Route::get('/admin/userlist',[UserController::class, 'viewUsers'])->name('admin.viewUsers');
Route::get('/admin/user-create',[UserController::class, 'createUsers'])->name('admin.createusers');
