<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function posts() {
        // $posts = DB::select("select * from posts"); // raw sql queries
        $posts = DB::table("posts")->get();

        // $posts = DB::table("posts")->select(["id", "title", "content"])->get();
        // return $posts;

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

        // DB::insert("insert into posts (title, content) values (?, ?)", [$request->title, $request->content]);
        DB::table("posts")->insert([
            "title"=>$request->title,
            "content"=>$request->content,
        ]);

        return redirect("/");
    }

    function deletePost($id) {
        // DB::delete("delete from posts where id = ?", [$id]);
        $post = DB::table("posts")->where("id", $id)->first();

        if(isset($post->id)) {
            $post->delete();
            return redirect("/")->with("delete", "deleted successfully");
        } else {
            return redirect("/")->with("not-found", "the post is not found");
        }
        

    }

    function modifPost($id) {
        // $post = DB::select("select * from posts where id = ?", [$id]);
        $post = DB::table('posts')->find($id);
        // $post = DB::table('posts')->where("id", "=", $id)->first();
        // $post = DB::table('posts')->where("id", "=", $id)->get();
        // return $post;

        return view("modifPost", ['post'=>$post]);
    }

    function modifPostToDB(Request $request) {
        // DB::update("update posts set title = ?, content = ? where id = ?", [$request->title, $request->content, $request->id]);
        DB::table("posts")
        ->where("id", "=", $request->id)
        ->update([
            "title"=>$request->title,
            "content"=>$request->content,
        ]);

        return redirect("/")->with("modifier", "modifier successfully");
    }
}
