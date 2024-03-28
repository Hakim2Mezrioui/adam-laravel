<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RevisionController extends Controller
{
    function home() {
        return view("home");
    }
    function about() {
        return view("about");
    }

    function blogs() {
        // $blogs = ["toto", "titi", "tata", "tutu"];

        $blogs = DB::select("select * from blogs");

        // return view("blogs", ["blogsRecu" => $blogs]);
        // return view("blog", compact("blogs"));
        return view("blogs")->with("blogsRecu", $blogs);
    }

    function addBlog() {
        return view("add-blog");
    }

    function addBlogToDB(Request $request) {
        DB::insert("insert into blogs (title) values (?)", [$request->blog]);
        return redirect("blogs");
    }
}
