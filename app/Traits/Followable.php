<?php

namespace App\Traits;

use App\Models\User;
use App\Notifications\FollowNotififcation;

use Illuminate\Notifications\Notifiable;

trait Followable
{

    public function follows() {
        return $this->belongsToMany(User::class , 'follows' , 'user_id' , 'following_user_id');
    }
    public function following($user) {
       return $this->follows()->where('id' , $user->id)->exists();
    }
    public function follow(User $user) {
        $this->follows()->save($user) ;
    }
    public function unfollow(User $user) {
        $this->follows()->detach($user);
    }
    public function followingTweets() {
        return $this->follows->map->tweets->flatten()->all() ;

    }
}
