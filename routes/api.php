<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\DoctorReviewController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/auth/register', [AuthController::class, 'createUser']);
Route::post('/auth/login', [AuthController::class, 'loginUser']);
Route::get('/pets', [PetController::class, 'index']);
   Route::post('/pets', [PetController::class, 'store']);
   Route::get('/pets/{id}', [PetController::class, 'show']);
   Route::put('/pets/{id}', [PetController::class, 'update']);
   Route::delete('/pets/{id}', [PetController::class, 'destroy']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('getdoctor', [DoctorController::class, 'getDoctors']);
Route::get('getdoctor/{id}', [DoctorController::class, 'getDoctor']);
Route::get('getproducts', [ProductController::class, 'getProducts']);
Route::get('getproduct/{id}', [ProductController::class, 'getProduct']);
Route::get('getpets', [PetController::class, 'getPets']);
Route::get('getpet/{id}', [PetController::class, 'getPet']);
Route::post('productReview', [ProductReviewController::class, 'store']);
Route::get('productReviews/{id}', [ProductReviewController::class, 'list']);
Route::post('doctorReview', [DoctorReviewController::class, 'store']);
Route::get('doctorReviews/{id}', [DoctorReviewController::class, 'list']);
