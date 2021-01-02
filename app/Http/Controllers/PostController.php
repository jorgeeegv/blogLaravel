<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::with('autor')->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('post.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return ("Formulario de edicion de "+$id);
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
        Post::findOrFail($id)->delete();
        $posts = Post::get();
        return view('posts.index', compact('posts'));
    }

    public function nuevoPrueba()
    {
        $post = new Post();
        $post->titulo =
        "Titulo " . rand(0, 100);
        $post->contenido =
        "Contenido " . rand(0, 100);
        $post->save();
        $posts = Post::get();
        return view('posts.index', compact('posts'));

    }

    public function editarPrueba($id)
    {
        $post = Post::find($id);
        $post['titulo'] = "Titulo " . rand(0, 100);
        $post['contenido'] = "Contenido " . rand(0, 100);
        $post->save();
        return redirect()->route('post.index');
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show', compact('post'));
    }
}
