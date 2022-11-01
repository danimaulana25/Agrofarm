<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

// Route Admin
// Route::get('/dashboard', function () {
//     return view('admin.index')
// });
// Route::get('/adminproduk', function () {
//     return view('admin.produk.index');
// });
// Route::get('/adminpengambilan', function () {
//     return view('admin.pengambilan.index');
// });
// Route::get('/adminpenjualan', function () {
//     return view('admin.penjualan.index');
// });
// Route::get('/adminprodukcreate', function () {
//     return view('admin.produk.create');
// });

Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.index');
    });
    Route::resource('/adminproduk', ProductController::class);
    Route::resource('/adminkategori', CategoryController::class);
});


// Route Landingpage
Route::get('/', function () {
    return view(
        'landingpage.home',
        [
            'title' => 'home'
        ]

    );
});
Route::get('/about', function () {
    return view('landingpage.about');
});
Route::get('/journey', function () {
    return view('landingpage.journey');
});
Route::get('/feature', function () {
    return view('landingpage.feature');
});
Route::get('/product', function () {
    return view('landingpage.product');
});
Route::get('/team', function () {
    return view('landingpage.team');
});
Route::get('/contact', function () {
    return view('landingpage.contact');
});

Route::get('/login', [HomeController::class, 'index'])->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
