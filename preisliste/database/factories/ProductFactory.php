<?php

namespace Database\Factories;

use App\Enums\ProductTypeEnum;
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
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'price' => $this->faker->randomFloat(NULL,0,20),
            'type' => $this->faker->randomElement([ProductTypeEnum::RoseWine->value,ProductTypeEnum::WhiteWine->value,ProductTypeEnum::RedWine->value,ProductTypeEnum::SparklingWine->value,ProductTypeEnum::Softdrink->value]),
            'highlighted' => false
        ];
    }
}
