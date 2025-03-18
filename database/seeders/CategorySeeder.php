<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Electronics',
                'image' => '/categorias/electronica.jpg'
            ],
            [
                'id' => 2,
                'name' => 'Fashion',
                'image' => '/categorias/moda.jpg'
            ],
            [
                'id' => 3,
                'name' => 'Belleza',
                'image' => '/categorias/belleza.jpg'
            ],
            [
                'id' => 4,
                'name' => 'Hogar',
                'image' => '/categorias/hogar.jpg'
            ],
            [
                'id' => 5,
                'name' => 'Libros',
                'image' => '/categorias/libros.png'
            ],
            [
                'id' => 6,
                'name' => 'Muebles',
                'image' => '/categorias/muebles.png'
            ],
            [
                'id' => 7,
                'name' => 'Deporte',
                'image' => '/categorias/deporte.jpg'
            ],
            [
                'id' => 8,
                'name' => 'Coche y moto',
                'image' => '/categorias/cocheymoto.jpg'
            ]
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(
                ['id' => $category['id']],
                $category
            );
        }
    }
}
