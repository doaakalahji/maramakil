<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/about-us', function () {
    return view('pages.aboutus');
})->name('about-us');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


// Route::get('/dashboard', function () {
//     return view('dashboard.dashboard');
// })->middleware(['auth', 'verified' , 'admin'])->name('dashboard');

Route::middleware(['auth' , 'admin'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/store_product', function () {
    //     return view('dashboard.add_product');
    // })->middleware(['auth', 'verified' , 'admin'])
    //   ->name("add_product");


    Route::post('/save', [ProductController::class , "store"])->name("save_product");
});

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified' , 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    Route::get('/store_product', function () {
        return view('dashboard.add_product');
    })->name("add_product");
});



