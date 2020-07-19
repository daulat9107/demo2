<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('user/posts/{post}','PostController@index');