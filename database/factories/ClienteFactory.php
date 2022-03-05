<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'codest' => $this->faker->numerify('####'),
            'situacion' => $this->faker->randomDigit,
            'apellido' => $this->faker->lastName,
            'nombre' => $this->faker->name,
            'dni' => $this->faker->numerify('########'),
            'parentesco' => $this->faker->word
        ];
    }
}
