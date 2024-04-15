<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class PostController extends Controller
{
    function addPost()
    {
        $post = Post::create([
            "title" => "third post",
            "content" => "content ...",
            "user_id" => 1,
        ]);

        return $post;
    }

    function getPost()
    {
        // $post = Post::find(1)->user;

        // return $post;

        $users = User::find(1)->posts;

        return $users;
    }
}
