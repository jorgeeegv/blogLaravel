<?php

namespace Database\Seeders;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuarios = User::all();
        $usuarios->each(function ($usuario) {
            Post::factory()->count(2)->create([
                'usuario_id' => $usuario->id
            ]);
        });

    }
}
