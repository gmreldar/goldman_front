<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Catalog\Product;
use Illuminate\Database\Seeder;

/**
 * Class ProductSeeder
 * @package Database\Seeders
 */
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Product::find(1)) {
            Product::factory()->count(1000)->create();
        }
    }
}
