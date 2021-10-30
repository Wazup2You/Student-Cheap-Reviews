<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
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

    public function create()
    {
        return view('user.reviews.create');
    }


    public function store()
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'required|image',
            'slug' => ['required', Rule::unique('reviews', 'slug')],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        $attributes['user_id'] = auth()->id();
        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

        Review::create($attributes);

        return redirect('/');
    }

}
