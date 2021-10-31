<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use Illuminate\Http\Request;

class FollowingController extends Controller
{
    public function index()
    {
        return view('user.reviews.following');
    }

    public function store(User $user)
    {

        auth()->user()->toggleFollow($user);

        return back();
    }
}
