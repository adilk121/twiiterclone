<?php

use Illuminate\Support\Facades\Auth;

function corrent_user() {
    return Auth::user() ;
}
