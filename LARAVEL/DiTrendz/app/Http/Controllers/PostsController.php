<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    function index () {

        return "All posts";
    }
    function Create_post () {

        return "Create new post";
    }
    function View_Post () {

        return "Display single post";
    }
    function Delete_Post () {

        return "Delete post";
    }
}
