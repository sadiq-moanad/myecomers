<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Prodect;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prodect>
 */
class ProdectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
          

            'productname' => fake()->text(5),
            'contry' => fake()->text(5),
            'color'=> fake()->text(5),
            'price'=> fake()->text(5), // توليد رقم عشوائي من 1000 إلى 9999
            'descrbion'=> fake()->text(5),
            'category_id' => 1,

        ];
    }
}
