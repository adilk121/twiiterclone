<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

trait Likable
{



    public function like(User $user , $liked = true){

        $user = $user ? $user : Auth::user();

        if($this->liked(Auth::user() , $liked)) {

            return $this->likes()->where('user_id',$user->id)
                                 ->where('tweet_id',$this->id)
                                 ->where('liked',$liked)
                                 ->delete() ;
        }

        return $this->likes()->updateOrCreate(
            [
                "user_id" => $user->id ,
                "tweet_id" => $this->id
            ],[
                "liked" => $liked

            ]
        );
    }

    public function likesCount(bool $liked = true) {
        return $this->likes()->where('liked', $liked )->count() ;
    }

    function liked(User $user ,bool $liked = true) {
        return $this->likes()->where('user_id', $user->id)
                      ->where('liked', $liked )
                      ->exists() ;
    }

}
