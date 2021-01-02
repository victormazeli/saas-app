<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_code' => $this->faker->word,
            'name'=> $this->faker->word,
            'description' => $this->faker->paragraph,
            'price' => $this->faker->numberBetween(1000, 10000),
            'description' => $this->faker->paragraph,
            'quantity' => rand(1,5),
            'sales' => rand(1,5),
            'product_detail' => $this->faker->sentence(20),
            'image' => 'https://via.placeholder.com/350x150',
            'slug'=> str_replace('--', '-', strtolower(preg_replace('/[^a-zA-Z0-9]/', '-', trim($this->faker->sentence(5))))),
   
        ];
    }
}
