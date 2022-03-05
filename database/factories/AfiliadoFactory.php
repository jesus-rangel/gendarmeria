<?php

namespace Database\Factories;

use App\Models\Afiliado;
use Illuminate\Database\Eloquent\Factories\Factory;

class AfiliadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Afiliado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'A_codest' => $this->faker->word,
            'A_situacion' => $this->faker->randomLetter,
            'A_anulado' => 'NO',
            'A_grado' => $this->faker->numberBetween($min = 20, $max = 80),
            'A_tipoestado' => 'A',
            'A_estado' => 'NOR',
            'A_filial' => $this->faker->numberBetween($min = 100, $max = 122),
            'A_apellido' => $this->faker->lastName,
            'A_nombre' => $this->faker->firstName,
            'A_fechaalta' => $this->faker->date,
            'A_fechabaja' => null,
            'A_dni' => $this->faker->numerify('########'),
            'A_fechanac' => $this->faker->date,
            'A_domicilio' => $this->faker->streetAddress,
            'A_localidad' => $this->faker->city,
            'A_provincia' => $this->faker->state,
            'A_codpostal' => '4001',
            'A_email' => $this->faker->email,
            'A_telfijo' => $this->faker->phoneNumber,
            'A_celular' => $this->faker->phoneNumber,
            'A_unidad' => '001',
            'A_farmacos' => '6',
            'A_farmacosextra' => '0',
            'A_farmacosextravto' => $this->faker->date,
            'A_usuario' => $this->faker->userName,
            'A_control' => $this->faker->dateTime,
            'A_socio' => $this->faker->numberBetween($min = 1, $max = 1000),
            'A_diasevacuacion' => 45,
            'A_cbu' => $this->faker->word,
            'A_cuil' => $this->faker->numerify('###########'),
            'A_diasacum' => null,
            'A_codestfdo' => '',
            'A_sitfdo' => '',
            'A_ficha' => $this->faker->sentence,
            'A_subunidad' => '',
            'A_benefpol' => ''
        ];
    }
}
