<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

/*

Route::get('/', function () {return view ('home');});

//Route::get('/About', function () {return view ('About');});

//Route::get(‘/About’,[AboutController::Class, 'About']);


Route::get('/Contact', function () {return 'This is Contact Us!';});

*/
Route::get('/',[MainController::class,'index'] );
Route::get('/About',[MainController::class,'About'] );
Route::get('/Contact',[MainController::class,'Contact'] );
Route::get('/Privacy',[MainController::class,'Privacy'] );

Route::get('/posts',[PostsController::class,'index'] );
Route::get('/post-create',[PostsController::class,'Create_post'] );
Route::get('/post',[PostsController::class,'View_Post'] );
Route::get('/post-delete',[PostsController::class,'Delete_Post'] );




