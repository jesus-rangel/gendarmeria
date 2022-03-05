<?php

namespace Database\Factories;

use App\Models\Vademecum;
use Illuminate\Database\Eloquent\Factories\Factory;

class VademecumFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vademecum::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word,
            'registro' => $this->faker->randomNumber,
            'troquel' => $this->faker->randomNumber,
            'monodroga' => $this->faker->word,
            'presentacion' => $this->faker->word,
            'laboratorio' => $this->faker->company,
            'vademecum' => $this->faker->word,
            
        ];
    }
}
