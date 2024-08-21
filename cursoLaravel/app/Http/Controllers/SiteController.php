<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $nome = 'Michel';
        $data = [
            'apelido_nome' => $nome,
        ];

        return view('welcome',$data);
    }

    public function exit(){
        return view('sair');
    }

    public function users(Request $r){
        $data = [
            'quantidade' => $r -> qnt
        ];
        return view('usuarios', $data);
    }
}
