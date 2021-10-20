<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index(){
        return view('reviews', [
            'reviews' => Review::latest()->filter(request(['search']))->get(),
            'categories' => Category::all()
        ]);
    }

    public function show(Review $review){
        return view('review', [
            'review' => $review
            //'review' => \App\Models\Review::findOrFail($id)
        ]);
    }
}
