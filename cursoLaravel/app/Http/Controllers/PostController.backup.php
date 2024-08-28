<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $new_post = [
            'title' => 'Meu terceiro Post',
            'content' => 'Conteúdo número 3',
            'author' => 'Michel 3'
        ];
        //forma mais convencional de criar um registro no banco
        $post = new Post($new_post);
        $post->save();

        // $post = new Post();
        // $post->title = 'Meu segundo post';
        // $post->content = 'Conteudo 2';
        // $post->author = 'Beatriz';
        // $post->save();

        dd($post);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //receberá um post com um novo recurso
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = new Post();
        // $posts = $post->all();
        $post = $post->find($id);

       return $post;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //caso você queira alterar só um dado
        $post = Post::find($id);
        $post->title = 'Meu segundo post aqui';
        $post->save();

        // $posts = Post::where('id','>',0)->update([
        //     'author' => 'Desconhecido',
        //     'title' => 'mudei'
        // ]);
        
        return $post;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);

        if($post){
            $post->delete();
        }else{
            $post ='Erro';
        }

        return $post;
    }
}
