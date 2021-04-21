<?php

namespace Database\Factories\Empleado;

use App\Models\Empleado\Empleado;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmpleadoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Empleado::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'direccion'=>$this->faker->streetAddress,
            'edad'=>$this->faker->numberBetween($min = 18,$max =110),
            'email'=>$this->faker->unique()->safeEmail,
            'IdCargo'=>$this->faker->numberBetween($min = 1, $max = 4)
        ];
    }
}
