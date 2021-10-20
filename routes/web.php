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

Route::get('/', function () {
//    \Illuminate\Support\Facades\DB::listen(function ($query) {
//        logger($query->sql, $query->bindings);
//    });

    return view('reviews', [
        'reviews' => \App\Models\Review::latest()->get(),
        'categories' => \App\Models\Category::all()
        ]);
})->name('home');

Route::get('reviews/{review:slug}', function (\App\Models\Review $review) { // Review::where('slug', $post)->firstOfFail()
    return view('review', [
        'review' => $review
        //'review' => \App\Models\Review::findOrFail($id)
    ]);
////    ddd($path);
});

Route::get('categories/{category:slug}', function (\App\Models\Category $category) {
    return view('reviews', [
        'reviews' => $category->reviews,
        'currentCategory' => $category,
        'categories' => \App\Models\Category::all()
    ]);
})->name('category');

Route::get('authors/{author:username}', function (\App\Models\User $author) {
    return view('reviews', [
        'reviews' => $author->reviews
    ]);
});
