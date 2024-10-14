<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminAuth;
use App\Http\Controllers\PostController;

Route::get('/admin',[AuthController::class,'show']);

Route::post('/admin',[AuthController::class,'login']);

Route::view('/','pages.index');

Route::get('/', [PostController::class, 'index']);

Route::get('/', [PostController::class, 'fotkyzcest']);



Route::get('/admindashboard', function () {
    // Over zda je admin zalogovan
    if (!session('admin_id')) {
        return redirect('/admin')->withErrors(['loginError' => 'Prosim prihlas se jako admin.']);
    }

    // Pokracuj po prihlaseni
    return view('pages.admindashboard');
})->name('pages.admindashboard');

Route::get('/prispevek', function () {
    return view('pages.prispevek');
})->middleware(AdminAuth::class);

Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::view('/poprvedojaponska','pages.poprvedojaponska');

Route::get('/{category}', [PostController::class, 'category'])->name('posts.category');

Route::get('/{category}/{id}', [PostController::class, 'show'])->name('post.show');



