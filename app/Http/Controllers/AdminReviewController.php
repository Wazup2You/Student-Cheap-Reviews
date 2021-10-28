<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminReviewController extends Controller
{
    public function index()
    {
        return view('admin.reviews.index',
        [
            'reviews' => Review::paginate(50)
        ]);
    }

    public function create()
    {
        return view('admin.reviews.create');
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

    public function edit(Review $review)
    {
        return view('admin.reviews.edit', ['review' => $review]);
    }

    public function update(Review $review)
    {
        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => 'image',
            'slug' => ['required', Rule::unique('reviews', 'slug')->ignore($review->id)],
            'excerpt' => 'required',
            'body' => 'required',
            'category_id' => ['required', Rule::exists('categories', 'id')]
        ]);

        if(isset($attributes['thumbnail'])) {
            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
        }

        $review->update($attributes);

        return back()->with('success', 'Review Updated!');
    }

    public function destroy(Review $review)
    {
        $review->delete();

        return back()->with('success', 'Review Deleted!');

    }
}

