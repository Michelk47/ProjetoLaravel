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

        return $user;

    }

    public function create(Request $r){
        $users = [
            'name' => 'Michel',
            'email' => 'michel@gmail.com'
        ];

        $createUser = new User($users);
        $createUser->save();
        //dd($users);

    }
}
