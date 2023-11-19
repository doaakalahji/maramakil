<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductSiteController;
use App\Http\Controllers\ProfileController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

// add multi lang 
// Route::get('/langconvert/{locale}', function ($locale) {
//     if(in_array("$locale",["en","ar","tr"])){
//         session()->put("locale" , $locale);
//     }
//     return redirect()->back();
// })->name('langconvert');

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ 

        Route::get('/', function () {
            return view('pages.home');
        })->name('home');
        
        Route::get('/about-us', function () {
            return view('pages.aboutus');
        })->name('about-us');
        
        Route::get('/products', [ProductSiteController::class , "getAllProducts"])->name('products');

        Route::get('/product_info/{id}', [ProductSiteController::class , "showProduct"])->name('product_detail');
        
        Route::get('/contact', function () {
            return view('pages.contact');
        })->name('contact');
        
        Route::middleware(['auth' , 'admin'])->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::post('/save', [ProductController::class , "store"])->name("save_product");
        });
        
        require __DIR__.'/auth.php';
        
        Route::middleware(['auth', 'verified' , 'admin'])->group(function () {
            Route::get('/dashboard', [ProductController::class , "index"])->name('dashboard');
        
            Route::resource("/product" , ProductController::class);
        });

    });

