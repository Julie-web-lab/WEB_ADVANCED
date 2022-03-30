<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {return view ('home');});

//Route::get('/About', function () {return view ('About');});

Route::get(‘About’,[AboutController::Class, 'About']);

Route::get('/Contact', function () {return 'This is Contact Us!';});

