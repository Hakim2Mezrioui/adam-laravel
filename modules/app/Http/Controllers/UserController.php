<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function users()
    {
        // $users = DB::select("select * from users"); // sql raw queries
        // $users = DB::table("users")->get(); // query builder
        $users = User::all(); // get(); // orm

        return $users;
    }

    function user()
    {
        $user = User::find(1);
        return $user;
    }

    function deleteUser()
    {
        $user = User::find(5);

        // $user->delete();
        // User::destroy([2, 3, 4]);
        User::delete([5, 6 ,7]);
    }

    function createUser()
    {
        // $user = new User();

        // $user->name = "hakim mezrioui";
        // $user->email = "mezrioui@gmail.com";
        // $user->password = bcrypt('123456');

        // $user->save();

        // User::create($request->all());

        $user = User::create([
            "name" => "adam mezri",
            "email" => "mezri@gmail.com",
            "password" => bcrypt(123456),
        ]);

        return $user;
    }


    function updateUser()
    {
        $user = User::find(11);

        if (!$user) {
            return; // break
        }

        // $user->update([
        //     'name'=> "HAKIM MEZRIOUI",
        // ]);

        $user->name = "MEZRIOUI HAKIM";
        $user->save();
    }
}
