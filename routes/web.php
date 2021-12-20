<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdminController;

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

Route::get('/beranda', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('admin.login');
})->name('login');

Route::post('/login', [AdminController::class, 'authenticate']);

Route::middleware(['auth'])->group( function(){

    Route::get('/dashboard', function () {
        return view('admin.index');
    });

    Route::get('/list-berita', function () {
        return view('admin.list-berita');
    });

    Route::get('/tambah-berita', function () {
        return view('admin.tambah-berita');
    });

});

Route::get('/logout', [AdminController::class, 'logout']);


Route::get('/404', function () {
    return view('admin.404');
});

Route::get('/alerts', function () {
    return view('admin.alerts');
});

Route::get('/blank', function () {
    return view('admin.blank');
});

Route::get('/register', function () {
    return view('admin.register');
});