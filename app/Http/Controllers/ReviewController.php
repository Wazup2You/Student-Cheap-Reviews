<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Symfony\Component\HttpFoundation\Response;

class ReviewController extends Controller
{
    // index, show, create, store, edit, update, destroy
    public function index(){
        return view('reviews.index', [
            'reviews' => Review::latest()->filter(
                request(['search', 'category', 'author'])
            )->paginate(18)->withQueryString()
            ]);
    }

    public function show(Review $review){
        return view('reviews.show', [
            'review' => $review
        ]);
    }
}
