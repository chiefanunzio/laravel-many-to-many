<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'homeController@homeFun')
       ->name('home');         