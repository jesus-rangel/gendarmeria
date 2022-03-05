<?php

namespace Database\Factories;

use App\Models\FamiliaresSocio;
use Illuminate\Database\Eloquent\Factories\Factory;

class FamiliaresSocioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FamiliaresSocio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Fs_codest' => $this->faker->numberBetween($min =1, $max = 999999),
            'Fs_situacion' => 1,
            'Fs_fechaalta' => $this->faker->date,
            'Fs_fechabaja' => null,
            'Fs_parentesco' => $this->faker->word,
            'Fs_apellido' => $this->faker->lastName,
            'Fs_nombre' => $this->faker->firstName,
            'Fs_dni' => $this->faker->numerify('########'),
            'Fs_fechanac' => $this->faker->date,
            'Fs_usuario' => $this->faker->word,
            'Fs_control' => $this->faker->dateTime,
            'Fs_socio' => null,
            'Fs_estado' => 'A',
            'Fs_estadocivil' => $this->faker->word,
            'Fs_nrofliar' => $this->faker->numberBetween($min = 1, $max = 9),
            'Fs_adher' => 'NO',
            'Fs_discapacidad' => 'NO',
            'Fs_218' => 'NO',
            'Fs_249' => 'NO',
            'Fs_250' => 'NO',
            'Fs_259' => 'NO',
            'Fs_60' => 'NO',
        ];
    }
}
