<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controller\authentication;


Route::get('/apiversion',function(){
    return "Hello i am api";
} );
Route::get('/P_error', function(){
    return "password and confirm password field is not same";
});

Route::post('/signup', 'authentication@register');