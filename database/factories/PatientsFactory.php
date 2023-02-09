<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PatientsFactory extends Factory
{
    public function definition()
    {
        return [
            'name_patient' => $this->faker->name,
            'name_mother'  => $this->faker->name,
            'date_birth'   => $this->faker->date,
            'cpf'          => $this->faker->unique()->cpf(false),
            'cns'          => $this->faker->rg(false),
            'address'      => $this->faker->address,
            'number'       => $this->faker->buildingNumber,
            'complement'   => $this->faker->name,
            'neighborhood' => $this->faker->citySuffix,
            'city'         => $this->faker->city,
            'state'        => $this->faker->state,
            'cep'          => $this->faker->postcode,
            'image'        => $this->faker->image,
        ];
    }
}
