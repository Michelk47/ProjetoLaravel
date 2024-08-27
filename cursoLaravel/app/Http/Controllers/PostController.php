<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Post;


class PostController extends Controller
{
    
    public function create(Request $r){

        $new_post = [
            'title' => 'Meu primeiro Post',
            'content' => 'Conteúdo número 1',
            'author' => 'Michel'
        ];
        // forma mais convencional de criar um registro no banco
        // $post = new Post($new_post);
        // $post->save();

        $post = new Post();
        $post->title = 'Meu segundo post';
        $post->content = 'Conteudo 2';
        $post->author = 'Beatriz';
        $post->save();

        dd($post);
    }

    public function read(Request $r){
        $post = new Post();
        // $posts = $post->all();
        $post = $post->find(2);

       return $post;

    }

    public function all(Request $r){
        $posts = Post::all();
        return $posts;
    }

}
