<?php

namespace App\Models;

use App\Traits\Followable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
    use HasFactory, Notifiable , Followable ;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'uname',
        'password',
        'avatar'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getRouteKey()
    {
        return 'uname' ;
    }

    public function timeline(){

        $following = $this->follows()->pluck('id') ;
        return Tweet::whereIn('user_id', $following)
                    ->orWhere('user_id', $this->id)
                    ->latest()
                    ->paginate(10);

        // $tweets = [...$this->followingTweets() , ...$this->tweets] ;
        // return collect($tweets)->sortByDesc('created_at') ;
    }

    public function getAvatarAttribute($asset){
        return asset('storage/'.$asset);
    }

    public function getCoverAttribute(){
        return "https://i.pravatar.cc/400?u=" . $this->email . 'x' ;
    }

    public function tweets() {
        return $this->hasMany(Tweet::class);
    }

    public function path ($a = '') {
        $p = Route('profile' , $this);
        return $a ? $p."/".$a : $p ;
    }
}
