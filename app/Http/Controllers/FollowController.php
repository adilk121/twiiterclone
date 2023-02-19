<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\FollowNotififcation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FollowController extends Controller
{

    public function store(User $user)
    {




        if(Auth::user()->follows()->toggle($user)) {
            if(Auth::user()->following($user)){
                $user->notify(new FollowNotififcation(Auth::user()));
            }else{
                $user->unreadNotifications()->where("data->followerid"  , Auth::user()->id)->delete();
            }
        }


        return back();
    }



}
