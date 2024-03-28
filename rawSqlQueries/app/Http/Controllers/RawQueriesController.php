<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RawQueriesController extends Controller
{
    public function store(Request $request) {
        $name = $request->input("name");
        // if(isset($name)) {
        //     echo "isset  " ;
        // }

        if(!empty($name)) {
            DB::insert("insert into posts (name) values (?) ", [$name]);
            return "done!";
        }

        return "veuillez inserer le nom";
    }

    function get() {
        $posts = DB::select("select * from posts");

        // return $posts;

        foreach($posts as $post) {
            echo "$post->name - $post->id </br>";
        }
    }

    function update() {
        // DB::update("update posts set name = 'INSTAGRAM' where id = 3");
    }

    function delete($id) {
        DB::delete("delete from posts where id = ?", [$id]);
    }
}
