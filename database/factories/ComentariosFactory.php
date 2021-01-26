<?php

namespace Database\Factories;

use App\Models\Comentario;
use Illuminate\Database\Eloquent\Factories\Factory;

class ComentariosFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comentario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'comentario' => $this ->faker->sentence(3)
        ];
    }
}
