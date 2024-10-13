<?php

use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/admin',[AuthController::class,'show']);

Route::post('/admin',[AuthController::class,'login']);

Route::view('/','pages.index');

Route::get('/admindashboard', function () {
    // Manually check if the admin is authenticated
    if (!session('admin_id')) {
        return redirect('/admin/login')->withErrors(['loginError' => 'Please log in as an admin to access this page.']);
    }

    // Proceed if authenticated
    return view('pages.admindashboard');
})->name('pages.admindashboard');

Route::post('/admin/logout', [AuthController::class, 'logout'])->name('admin.logout');

Route::get('/jidlo',[RoutesController::class,'jidlo']);

Route::get('/kultura',[RoutesController::class,'kultura']);

Route::get('/ostatni',[RoutesController::class,'ostatni']);

Route::get('/popkultura',[RoutesController::class,'popkultura']);

Route::view('/poprvedojaponska','pages.poprvedojaponska');

Route::get('/vylety',[RoutesController::class,'vylety']);



