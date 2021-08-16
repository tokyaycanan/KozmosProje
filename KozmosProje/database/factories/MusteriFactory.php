<?php

namespace Database\Factories;

use App\Models\Musteri;
use Illuminate\Database\Eloquent\Factories\Factory;


class MusteriFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \App\Models\Musteri::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'Adi'=>$this->faker->firstName(),
           'SoyAdi'=>$this->faker->lastName(),
           'telefon'=>$this->faker->phoneNumber(),
        ];
    }
}
