<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    //

    public function index(){

        return view('notifications.index');

    }
    public function update(){

        if($notification = Auth::user()->notifications()->where('id',Request('notification'))->first()){
            $notification->markAsRead();

            return redirect($notification->data['link']);
        }

        return back();
    }

}
