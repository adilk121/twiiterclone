<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TweetController extends Controller
{
    //


    public  function store()
    {


        if(Request('tweet') === Request('images')) {

            return back()->withErrors(['empty' => 'You cannot tweet nothing !']) ;

        }

        Request()->validate([
            'tweet' => 'max:255',
            'images.*' => 'mimes:jpeg,png,gif,jpg,bitmap'
        ]);
        $tweet = Tweet::create([
            'user_id' => Auth::user()->id ,
            'body' => request('tweet') ,
        ]);


        $files = [] ;

        if(Request()->hasfile('images'))
        {
            foreach(Request()->file('images') as $file)
            {
                $name = $file->store(Auth::user()->uname . '/' . $tweet->id);

                $files[] = $name;

            }
        }
        $tweet->update([
            "images" => $files ,
        ]);



        return back() ;
    }
    public  function index()
    {

            return view('tweets.index',[
            'tweets' => auth()->user()->timeline(),
        ]);
    }


}
