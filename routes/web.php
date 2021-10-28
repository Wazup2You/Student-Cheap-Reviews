<?php

use Illuminate\Support\Facades\File;
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

Route::get('/', [\App\Http\Controllers\ReviewController::class, 'index'])->name('home');

Route::get('reviews/{review:slug}', [\App\Http\Controllers\ReviewController::class, 'show']);
Route::post('reviews/{review:slug}/comments', [\App\Http\Controllers\ReviewCommentsController::class, 'store']);

Route::get('register', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest');
Route::post('register', [\App\Http\Controllers\RegisterController::class, 'store'])->middleware('guest');

Route::get('login', [\App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest');
Route::post('login', [\App\Http\Controllers\SessionsController::class, 'store'])->middleware('guest');

Route::post('logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth');

// Admin

Route::middleware('can:admin')->group(function (){
    Route::resource('admin/reviews', \App\Http\Controllers\AdminReviewController::class)->except('show');
//    Route::post('admin/reviews', [\App\Http\Controllers\AdminReviewController::class, 'store']);
//    Route::get('admin/reviews/create', [\App\Http\Controllers\AdminReviewController::class, 'create']);
//
//    Route::get('admin/reviews', [\App\Http\Controllers\AdminReviewController::class, 'index']);
//    Route::get('admin/reviews/{review}/edit', [\App\Http\Controllers\AdminReviewController::class, 'edit']);
//
//    Route::patch('admin/reviews/{review}', [\App\Http\Controllers\AdminReviewController::class, 'update']);
//    Route::delete('admin/reviews/{review}', [\App\Http\Controllers\AdminReviewController::class, 'destroy']);
});

//Route::get('admin/status/{id}', [\App\Http\Controllers\ReviewController::class, 'reviewStatus'])->name('reviewStatus');



//Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
//    return view('reviews', [
//        'reviews' => $category->reviews,
//        'currentCategory' => $category,
//        'categories' => \App\Models\Category::all()
//    ]);
//})->name('category');

//Route::get('authors/{author:username}', function (\App\Models\User $author) {
//    return view('reviews.index', [
//        'reviews' => $author->reviews
//    ]);
//});
