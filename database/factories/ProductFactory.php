<?php

declare(strict_types=1);

namespace Database\Factories;

use App\Models\Catalog\Category;
use App\Models\Catalog\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * Class ProductFactory
 * @package Database\Factories
 */
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
        $title = $this->faker->name();
        return [
            'title' => $title,
            'category_id' => Category::inRandomOrder()->first()->id,
            'description' => $this->faker->text(),
            'keywords' => str_replace(' ', ',', $this->faker->text()),
            'slug' => Str::slug($title),
            'img' => $this->faker->image('public/storage/images/products', 640, 480, null, false),
            'price' => $this->faker->numberBetween(2000, 10000),
            'product_type' => $this->faker->randomElement(['бу', 'новое']),
            'size' => $this->faker->numberBetween(10, 1000),
            'metal_type' => $this->faker->randomElement(['золото', 'серебро']),
            'gender_type' => $this->faker->randomElement(['мужские', 'женские', 'унисекс']),
            'standard' => $this->faker->randomElement([375, 500, 583, 585, 750, 850, 900]),
            'is_sold' => $this->faker->boolean,
        ];
    }
}
