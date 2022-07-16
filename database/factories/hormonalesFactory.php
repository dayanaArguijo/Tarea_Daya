<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class hormonalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName($gender = null).' '.$this->faker->firstName($gender = null),
            'apellido' => $this->faker -> lastname().' '. $this->faker->lastname(),
            'edad' => $this->faker->numberBetween($min = 0, $max = 100),
            'dni' => $this->faker->unique()->numerify('####-####-#####'),
            'genero' =>$this->faker->randomElement($array = array ('femenino','masculino')),
            'ciudad' => $this->faker->city(),
            'telefono'  => $this->faker->randomElement([8,9]).$this->faker->unique()->numerify('#######'),
            'tipoExamen'=> $this->faker->randomElement($array = array ('TSH','T3','T4','T4 libre')),
            'precio' => $this->faker->numerify('####'),
        ];
    }
}
