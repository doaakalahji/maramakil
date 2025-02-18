<?php

use App\Http\Controllers\ContactController;
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

        Route::get('/product-owner-profile', [ProductSiteController::class , "newestProducts"])->name('product-owner-profile');

        Route::get('/product_info/{id}', [ProductSiteController::class , "showProduct"])->name('product_detail');

        Route::get('/gallery', function () {
            return view('pages.gallery');
        })->name('gallery');


        Route::get('/products', [ProductSiteController::class , "getAllProducts"])->name('products');

        Route::get('/product_info/{id}', [ProductSiteController::class , "showProduct"])->name('product_detail');

        Route::get('/contact', function () {
            return view('pages.contact');
        })->name('contact');

        // comments
        Route::post('/comment', [ProductSiteController::class , "saveComment"])->name("comments");
        Route::put('/reply/{product_id}/{comment_id}', [ProductSiteController::class , "saveReplyComment"])->name("reply");
        // contact
        Route::post('/contact', [ContactController::class , "store"])->name("contact");

        Route::middleware(['auth' , 'admin'])->group(function () {
            Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
            // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
            Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
            Route::post('/save', [ProductController::class , "store"])->name("save_product");

            Route::put('/profile', [ProfileController::class, 'updateProfile'])->name('profile.update');
        });

        require __DIR__.'/auth.php';

        Route::middleware(['auth', 'verified' , 'admin'])->group(function () {
            Route::get('/dashboard', [ProductController::class , "index"])->name('dashboard');
            Route::get('/manage_products', [ProductController::class , "manageProducts"])->name('manage_products');
            Route::get('/show_comments/{product_id}', [ProductController::class , "showComments"])->name('show_comments');
            Route::delete('/comment/{id}', [ProductController::class, 'deleteComment'])->name('comment.destroy');
            // Route::get('/manage_gallery', [GalleryController::class , "manageGallery"])->name('manage_gallery');
            Route::resource("/product" , ProductController::class);
        });

    });

