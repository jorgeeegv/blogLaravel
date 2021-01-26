<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;

class ComentariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $autores = User::all();
        
        $autores->each(function ($autor) {
            $posts = Post::all();
            $idAutor = $autor->id;
            $posts->each(function ($post) {
                Post::factory()->count(2)->create([
                //    'autor_id' => $idAutor,
                    'post_id' => $post->id
                ]);
            });
        });
    }
}
