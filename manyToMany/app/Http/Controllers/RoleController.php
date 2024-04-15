<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    function addRole()
    {
        // Role::insert([
        //     'name'=>"admin",
        // ]);

        Role::create([
            'name' => 'client',
        ]);
    }

    function roles()
    {
        return Role::get();
    }

    function role()
    {
        // return Role::where('id', 2)->limit(1)->get();
        return Role::find(2);
    }

    function updateRole()
    {
        Role::where('id', 1)->update([
            'name' => 'Admin',
        ]);
    }

    function deleteRole()
    {
        // Role::where("id", 1)->delete();
        // Role::destroy([3, 5]);
        // Role::truncate();
    }

    function addUser()
    {
        // $user = User::create([
        //     'name' => "adam",
        //     "email" => "adam@gmail.com",
        //     "password" => md5("123456"),
        // ]);

        // $user = User::create([
        //     'name' => "hakim",
        //     "email" => "hakim@gmail.com",
        //     "password" => md5("123456"),
        // ]);

        $user = User::find(2);
        $role = Role::find(2);

        $role->users()->save($user);
        // $user->roles()->save($role);
    }

    function getAllRolesOfUser()
    {
        // $role = Role::find(1);

        // return $role->users()->get();

        $user = User::find(2);
        return $user->roles;
    }

}
