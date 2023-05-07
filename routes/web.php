<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\OrderController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\VarifiedPetsController;

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


// multi auth
// ADMIN routes
Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {

    Route::get('dashboard', [CategoryController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('add-category', [CategoryController::class, 'create'])->name('admin.category');
    Route::post('Addcategory', [CategoryController::class, 'store'])->name('admin.upload-category');
    Route::get('category-list', [CategoryController::class, 'index'])->name('admin.view-category');
    Route::get('edit-category/{id}', [CategoryController::class, 'edit'])->name('admin.edit-category');
    Route::post('update-category/{id}', [CategoryController::class, 'update'])->name('admin.update-category');

    Route::get('add-doctor', [DoctorController::class, 'index'])->name('admin.addDoctor');
    Route::get('doctor-list', [DoctorController::class, 'list'])->name('admin.doctor-list');
    Route::get('add-pets', [VarifiedPetsController::class, 'index'])->name('admin.add-verified-pets');
    Route::get('pets-list', [VarifiedPetsController::class, 'list'])->name('admin.pets-list');
    Route::get('edit-pets', [VarifiedPetsController::class, 'list'])->name('admin.edit-pets');
    Route::post('create-pet', [VarifiedPetsController::class, 'store'])->name('admin.create-pet');

    Route::post('create-doctor', [DoctorController::class, 'store'])->name('admin.create-doctor');
    Route::get('edit-doctor/{id}', [DoctorController::class, 'edit'])->name('admin.edit-doctor');
    Route::post('update-doctor/{id}', [DoctorController::class, 'update'])->name('admin.update-doctor');
    Route::get('delete-doctor/{id}', [DoctorController::class, 'destroy'])->name('admin.delete-doctor');

    Route::get('manage-orders', [AdminController::class, 'manageOrders']);
    Route::get('customers', [AdminController::class, 'customers']);
    Route::get('logout', [AdminController::class, 'logout'])->name('admin.logout');


    Route::get('product-list', [ProductController::class, 'index'])->name('admin.product-list');
    Route::get('add-product', [ProductController::class, 'create'])->name('admin.add-product');
    Route::post('create-product', [ProductController::class, 'store'])->name('admin.create-product');
    Route::get('edit-product/{id}', [ProductController::class, 'edit'])->name('admin.edit-product');
    Route::post('update-product/{id}', [ProductController::class, 'update'])->name('admin.update-product');
    Route::get('delete-product/{id}', [ProductController::class, 'destroy'])->name('admin.delete-product');


    Route::get('manage-orders', [AdminController::class, 'manageOrders'])->name('admin.manage-orders');
    Route::get('customers', [AdminController::class, 'customers'])->name('admin.customers');

    Route::get('coupan-list', [DiscountController::class, 'index'])->name('admin.coupan-list');
    Route::get('add-coupan', [DiscountController::class, 'create'])->name('admin.add-coupan');
    Route::post('storecoupan', [DiscountController::class, 'store'])->name('admin.storecoupan');
    Route::get('edit-coupan/{id}', [DiscountController::class, 'edit'])->name('admin.edit-coupan');
    Route::post('update-coupan/{id}', [DiscountController::class, 'update'])->name('admin.update-coupan');


});

// USER routes
Route::middleware(['auth', 'user'])->prefix('user')->group(function () {

    Route::get('dashboard', [UserController::class, 'home'])->name('user.dashboard');
    Route::get('about-us', [UserController::class, 'about_page'])->name('user.About');
    Route::get('contact', [UserController::class, 'contact_page'])->name('user.Contact');
    Route::get('product', [UserController::class, 'products'])->name('user.product');
    Route::get('search', [UserController::class, 'search'])->name('user.search');

    Route::get('product-details/{id}', [ProductController::class, 'show'])->name('user.');

    Route::get('product-cart', [UserController::class, 'cart'])->name('user.');
    Route::get('product-checkout', [UserController::class, 'product_checkouts'])->name('user.product-checkout');

    Route::get('whishlist', [UserController::class, 'whishlist_page'])->name('user.');
    Route::get('login_register', [UserController::class, 'login_page'])->name('user.');
    Route::get('faqs', [UserController::class, 'faqs_page'])->name('user.');
    Route::get('profile', [UserController::class, 'user_page'])->name('user.profile');
    Route::get('profile-form', [UserProfileController::class, 'index'])->name('user.profile-form');
    Route::post('store-profile', [UserProfileController::class, 'store'])->name('user.store-profile');
    Route::get('logout', [UserProfileController::class, 'logout'])->name('user.logout');
    Route::get('category/{id}', [UserController::class, 'category'])->name('user.category');
    Route::post('add-to-cart/{id}', [CartController::class, 'add'])->name('user.cart');
    Route::get('cartview', [CartController::class, 'cartview'])->name('user.cartview');
    Route::get('item-delete/{id}', [CartController::class, 'destroy'])->name('user.item-delete');
    Route::post('create-order', [OrderController::class, 'store'])->name('user.create-order');


});

Route::get('/', function () {
    return view('welcome');
});

require __DIR__ . '/auth.php';
