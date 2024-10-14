<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;

Route::get('/admin',[AuthController::class,'show']);

Route::post('/admin',[AuthController::class,'login']);

Route::view('/','pages.index');

Route::get('/admindashboard', function () {
    // Over zda je admin zalogovan
    if (!session('admin_id')) {
        return redirect('/admin')->withErrors(['loginError' => 'Prosim prihlas se jako admin.']);
    }

    // Proceed if authenticated
    return view('pages.admindashboard');
})->name('pages.admindashboard');

Route::get('/prispevek', function () {
    return view('pages.prispevek');
})->middleware(AdminAuth::class);

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::view('/poprvedojaponska','pages.poprvedojaponska');



