<?php

use App\Http\Controllers\ExploreController;
use App\Http\Controllers\FollowController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\TweetController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Fortify;
use Laravel\Fortify\Http\Controllers\RegisteredUserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Fortify::viewPrefix('auth.');

Route::middleware(['auth'])->group( function () {
    Route::get('/',[TweetController::class,'index']);
    Route::post('tweets',[TweetController::class ,'store']);
    Route::get('tweets',[TweetController::class,'index'])->name('home');
    Route::get('explore',[ExploreController::class,'index'])->name('explore');
    Route::get('notifications',[NotificationController::class,'index'])->name('notif');
    Route::post('notifications/{notification}',[NotificationController::class,'update'])->name('markAsRead');
    Route::get('users/{user:uname}',[UserController::class,'show'])->name('profile');
    Route::get('users/{user:uname}/edit',[UserController::class,'edit'])->middleware('can:edit,user');
    Route::put('users/{user:uname}/edit',[UserController::class,'update'])->middleware('can:edit,user');
    Route::post('users/{user:uname}/follow',[FollowController::class,'store']);
    Route::post('tweets/{tweet}/like',[LikeController::class,'store']);
    Route::post('tweets/{tweet}/dislike',[LikeController::class,'destory']);

});

