<?php

use Illuminate\Support\Facades\Route;

// blog post start
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentsController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;



// for cart
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;




Route::get('/blog', [PostController::class, 'index'])->name('blog');

Route::get('blog/posts/{post:slug}', [PostController::class, 'show']);
Route::post('blog/posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

Route::post('newsletter', NewsletterController::class);



// Admin Section
Route::middleware('can:admin')->group(function () {
    Route::resource('blog/admin/posts', AdminPostController::class)->except('show');
});
// Route::middleware('can:admin')->group(function () {
//     Route::resource('shop/admin/products', AdminProductController::class)->except('show');
// });
Route::middleware('can:admin')->group(function () {
    Route::resource('user/admin/users', AdminUserController::class)->except('show');
});

// blog post end

// Shop page
// Route::get('/shop', [ProductController::class, 'index'])->name('shop');

// Route::get('products/{product:slug}', [ProductController::class, 'show']);



// Home page
// Route::get('/', function () {
//     return view('home');
// });

// About page
Route::get('about', function () {
    return view('components.about.about');
});
// Projects
Route::get('pre-built', function () {
    return view('projects');
});

// Report page
Route::get('feedback', function () {
    return view('components.report.report');
});




Auth::routes(['verify' => true]);

// Portfolio 
Route::get('/', [App\Http\Controllers\PortfolioController::class, 'portfolio'])->name('portfolio');






// cart routes
Route::get('/c', [ProductController::class, 'productList'])->name('products.list');
Route::get('cart', [CartController::class, 'cartList'])->name('cart.list');
Route::post('cart', [CartController::class, 'addToCart'])->name('cart.store');
Route::post('update-cart', [CartController::class, 'updateCart'])->name('cart.update');
Route::post('remove', [CartController::class, 'removeCart'])->name('cart.remove');
Route::post('clear', [CartController::class, 'clearAllCart'])->name('cart.clear');



// Hire and custom order routes
Route::get('/hire', function () {
    return view('components.hirenorder.hire');
});
Route::get('/customorder', function () {
    return view('components.hirenorder.customorder');
});




// contact form data collector
Route::post('/', [App\Http\Controllers\ContactController::class, 'storeContactForm'])->name('contact.store');
// order form data collector 
Route::post('/customorder', [App\Http\Controllers\CustomorderController::class, 'storeCustomOrder'])->name('customorder.store');
// Hire form data collector 
Route::post('/hire', [App\Http\Controllers\HireController::class, 'storeHire'])->name('hire.store');



Route::get('sendSubscribers', [App\HTTP\Controllers\SubscribeController::class, 'sendSubscribers']);
Route::post('subscribe', [App\HTTP\Controllers\SubscribeController::class, 'subscribe']);
