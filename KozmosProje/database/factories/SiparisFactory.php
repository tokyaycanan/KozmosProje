<?php

namespace Database\Factories;

use App\Models\Siparis;

use Illuminate\Database\Eloquent\Factories\Factory;

class SiparisFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */

    protected $model = Siparis::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Adet'=>$this->faker->numberBetween(100,1000),
            'MusteriId'=>$this->faker->numberBetween(1,11),
            'UrunKodu'=>$this->faker->numberBetween(1000,1101)


        ];
    }



}
