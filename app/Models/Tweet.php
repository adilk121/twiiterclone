<?php

namespace App\Models;

use App\Traits\Likable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Tweet extends Model
{

    use Likable;

    protected $guarded = [] ;
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class); 
    }

    public function getImageAttribute(){
        $images = [] ;
        $data = json_decode($this->images) ;
        if($data && is_array($data)){

            foreach($data  as $img) {
                $images[] = (asset('/storage/' . $img));
            } 

        }
        
        return $images ;

    }
    public function likes(){
        return $this->hasMany(Like::class);
    }
}
