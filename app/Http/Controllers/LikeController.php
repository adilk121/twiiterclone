<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// controller
class LikeController extends Controller
{
    //

    public function store(Tweet $tweet) {
        $tweet->like(Auth::user());
        return back();
    }

    public function destory(Tweet $tweet) {
        $tweet->like(Auth::user() , false);

        return back();
    }
}
