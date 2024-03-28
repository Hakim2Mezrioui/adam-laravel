<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllers extends Controller
{
    function Home() {
        return "Welcom to home";
    }

    function Hello(string $name) {
        // return "Hello " . $name;
        return "Hello $name";
    }

    // function Welcome() {
    //     return 'Welcome id = ' . $_GET['id'] . " <br /> name = " . $_GET["name"];   
    // }
    public function Welcome(Request $request) {
        return 'Welcome id = ' . $request->input("id") . " <br /> name = " . $request->input("name");   
    }

    function page() {
        return view('page');
    }
}