<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Usuario;

class UsuarioFactory extends Factory
{
    
    protected $model=Usuario::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email'=>$this->faker->unique()->safeEmail,
            'password'=> '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'email_verificacion'=> now(),
            'nombre'=>$this->faker->name,
            'num_celular'=> $this->faker->e164PhoneNumber,
            'cedula' => $this->faker->ean8,
            'fecha_nacimiento'=>$this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'codigo_ciudad'=>$this->faker->currencyCode

        ];
    }
}
