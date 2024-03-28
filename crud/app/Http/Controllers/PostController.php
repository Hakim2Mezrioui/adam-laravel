<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function posts() {
        $posts = DB::select("select * from posts");

        return view('posts', ['posts' => $posts]);
        // return view('posts', compact("posts"));
        // return view("posts")->with("posts", $posts)
    }

    function addPost() {
        return view("addPost");
    }

    function addPostToDB(Request $request) {
        $request->validate(
            [
                "title"=>"required|min:5",
            ], [
                "title.required" => "le champ est obligatoir",
                "title.min" => "le titie doit etre combiner par 5 au minimum",
            ]
        );

        DB::insert("insert into posts (title, content) values (?, ?)", [$request->title, $request->content]);

        return redirect("/");
    }

    function deletePost($id) {
        DB::delete("delete from posts where id = ?", [$id]);
        return redirect("/");
    }
}
