<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{

    public function run()
    {
        Category::create([
            'name' => 'Animation',
            'slug' => 'animation',
        ]);

        Category::create([
            'name' => 'Branding',
            'slug' => 'branding',
        ]);

        Category::create([
            'name' => 'Illustration',
            'slug' => 'illustration',
        ]);

        Category::create([
            'name' => 'Mobile',
            'slug' => 'mobile',
        ]);

        Category::create([
            'name' => 'Print',
            'slug' => 'print',
        ]);

        Category::create([
            'name' => 'Product Design',
            'slug' => 'product-design',
        ]);


        Category::create([
            'name' => 'Typography',
            'slug' => 'typography',
        ]);


        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

    }
}
