<?php

namespace App\Http\Controllers;

use App\Models\Cin;
use App\Models\User;
use Illuminate\Http\Request;

class CinController extends Controller
{
    function add()
    {
        Cin::insert(["cin" => "bk700156", "user_id" => 2]);
        Cin::insert(["cin" => "bk714507", "user_id" => 1]);
    }

    function fetchUser()
    {
        $cin = Cin::find(1);
        return $cin->user;

        // return User::find(1)->cin;
    }
}
