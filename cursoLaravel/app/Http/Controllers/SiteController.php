<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        $nome = 'Beatriz';
        $data = [
            'apelido_nome' => $nome,
            'html' => '<b style = "color:red;">Negrito</b>'
        ];

        $receita =[
            'ingredientes' =>[
                'farinha',
                'ovos',
                'farinha 2',
                'ovos2 '
            ]
            ];
        

        return view('welcome',$receita);
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

    public function listperson(){

        $listaPessoas = [
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Michel',
                'birth' => '11/07/1998',
                'idade' => '29'],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Beatriz',
                'birth' => '02/12/1999',
                'idade' => '29'],
            [
                'image' => 'https://i.pravatar.cc/150?img='.rand(0,50),
                'nome' => 'Thor',
                'birth' => '12/21/2017',
                'idade' => '29']

        ];
        $dados['listaPessoas'] = $listaPessoas;
        // dd($dados);

        return view('lista_pessoas', $dados);


    }



}
