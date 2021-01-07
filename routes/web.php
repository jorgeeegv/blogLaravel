<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\AutorController;
use App\Models\Autor;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/',function(){
    return view('posts/inicio');
});

Route::get('/post/nuevoprueba', [PostController::class, 'nuevoPrueba']);

Route::get('/post/editarPrueba/{id}', [PostController::class, 'editarPrueba']);

Route::resource('posts', PostController::class);
Route::get('/relacionprueba', function () {
    $autor = Autor::findOrFail(1);
    $post = new Post();
    $post->titulo = "Post de prueba " . rand();
    $post->contenido = "Contenido de prueba ";
    $post->autor()->associate($autor);
    $post->save();
    return redirect()->route('post.index');
});

