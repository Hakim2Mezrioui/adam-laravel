<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewsController extends Controller
{
    function home(Request $request) {
        // $name = $_GET["name"];
        // $name = $request->input("name");
        // return view("home")->with(["name" => $name]);
        // return view("home")->with("name", $name);
        // return view("home", compact("name"));
        $names = ["mezrioui", "hakim", "adam", "mezri"];
        $i = 0;
        return view("home", compact("names", "i"));
    }

    function products() {
        $products = [
            ["title" => "dell", "price" => 1800], 
            ["title" => "hp", "price" => 2000], 
            ["title" => "lenovo", "price" => 3000], 
            ["title" => "asus", "price" => 4300], 
        ];
        /*
        const products = [{title: "dell", price: 1800}]
        */

        return view("products.listProducts")->with("products", $products);
    }
}
