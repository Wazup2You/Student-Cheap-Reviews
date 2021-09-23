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
    return view('reviews', [
        'reviews' => \App\Models\Review::all()
        ]);
});

Route::get('reviews/{review}', function ($slug) {
    return view('review', [
        'review' => \App\Models\Review::find($slug)
    ]);
////    ddd($path);
})->where('review', '[A-z_\-]+');
