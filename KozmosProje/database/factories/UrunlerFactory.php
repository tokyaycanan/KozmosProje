<?php

namespace Database\Factories;

use App\Models\Urunler;
use Illuminate\Database\Eloquent\Factories\Factory;

class UrunlerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Urunler::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'UrunKodu'=>$this->faker->unique()->numberBetween(1000,1100),
          'Adi'=>$this->faker->word(),
        ];
    }
}
