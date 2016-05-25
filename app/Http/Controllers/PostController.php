<?php

namespace App\Http\Controllers;

use App\Posts;
use Illuminate\Http\Request;

use App\Http\Requests;

class PostController extends Controller
{
    public  function edit()
    {
        $posts=Posts::all();
        return view('admin.posts.allpost')->with('getpost',$posts);
    }
}
