<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class EmailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'asunto'=>$this->faker->text(50),
            'destinatario'=>$this->faker->unique()->safeEmail,
            'mensaje'=>$this->faker->text(250),
            'estado'=>$this->faker->randomElement([1,2]),
            'usuario_id'=>Usuario::all()->random()->id

        ];
    }
}
