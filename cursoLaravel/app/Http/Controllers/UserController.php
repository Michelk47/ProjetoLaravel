<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users =  User::all();

        return $users;

    }

    public function findOne(Request $r){
        $user = User::find($r->id);

        return $user->address;

    }

    public function add(Request $r){
        $rawdata = $r->only(['name', 'email', 'password']);

        $user = User::create($rawdata);
        return $user;





        // $users = [
        //     'name' => 'Michel',
        //     'email' => 'michel@gmail.com'
        // ];

        // $createUser = new User($users);
        // $createUser->save();
        // $user = new User();
        // $user->name = 'Michel2';
        // $user->email = 'michel2@gmail.com';
        // $user->save();
        // dd($user);

    }
}
