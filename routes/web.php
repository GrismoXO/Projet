<?php

use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ShoppingCartController;
use App\Http\Controllers\Admin\StoryController as AdminStoryController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\CarouselController as AdminCarouselController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment');
Route::get('/shop', [AdminProductController::class, 'index'])->name('shop');
Route::get('/story', [AdminStoryController::class, 'index'])->name('story');
Route::get('/products/product/{product}', [AdminProductController::class, 'show'])->name('products.product');
Route::get('/recherche', [SearchController::class,'search'])->name('search');
Route::get('/produits/cart', [ShoppingCartController::class, 'index'])->name('products.cart');
Route::post('/produits/cart/increment/{id}', [ShoppingCartController::class, 'increment'])->name('cart.increment');
Route::post('/produits/cart/decrement/{id}', [ShoppingCartController::class, 'decrement'])->name('cart.decrement');
Route::post('/produits/{product}/product', [ShoppingCartController::class, 'addCart'])->name('addCart');
Route::delete('/produits/cart/{id}', [ShoppingCartController::class, 'destroy'])->name('del');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/addresses', AddressController::class)->only('create', 'store', 'edit', 'update', 'destroy');


    Route::middleware('admin')->group(function () {
        Route::resource('/products', AdminProductController::class)->only('store', 'create', 'edit', 'update', 'destroy');
        Route::resource("/carousels", AdminCarouselController::class)->only('index','store', 'edit', 'update', 'destroy');
        Route::get('/carousels/show', [AdminCarouselController::class, 'show'])->name('carousels.show');
    });
});

require __DIR__.'/auth.php';
