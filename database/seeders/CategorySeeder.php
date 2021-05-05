<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Catalog\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

/**
 * Class CategorySeeder
 * @package Database\Seeders
 */
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!Category::find(1)) {
            $categories = [
                'Кольца',
                'Серьги',
                'Подвески',
                'Браслеты',
                'Цепи',
                'Колье',
            ];
            foreach ($categories as $category) {
                Category::create([
                    'title' => $category,
                    'description' => 'description',
                    'keywords' => 'keywords',
                    'slug' => Str::slug($category),
                ]);
            }
        }
    }
}
