<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "title" => $this->faker->name(),
            "preview" => $this->faker->text(50),
            "description" => $this->faker->text(),
            "thumbnail" => $this->faker->image("public/storage/products", "640", "520", null, false),
            "product_type" => $this->faker->text(),
            "weight_photo" => $this->faker->text(),
            "type_cake" => $this->faker->text(),
            "coverage" => $this->faker->text(),
            "decor_1" => $this->faker->text(),
            "decor_2" => $this->faker->text(),
            "show" => $this->faker->boolean(),
        ];
    }
}
