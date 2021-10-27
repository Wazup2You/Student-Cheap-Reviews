<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewCommentsController extends Controller
{
    public function store(Review $review)
    {
        // validation
        request()->validate([
            'body' => 'required'
        ]);

        $review->comments()->create([
            'user_id' => request()->user()->id,
            'body' => request('body')
        ]);

        return back();
    }
}
