<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ReviewSeeder extends Seeder
{
    public function run()
    {
        $reviews = [
            // Electronics reviews
            [
                'user_id' => 9,
                'product_id' => 1,
                'rating' => 5,
                'comment' => 'El iPhone 15 Pro Max es increíble. La calidad de la cámara es excepcional.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 10,
                'product_id' => 2,
                'rating' => 5,
                'comment' => 'El S24 Ultra es el mejor teléfono Android que he tenido.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Books reviews
            [
                'user_id' => 9,
                'product_id' => 23,
                'rating' => 5,
                'comment' => 'Una obra maestra de Gabriel García Márquez. Lectura obligatoria.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 10,
                'product_id' => 24,
                'rating' => 5,
                'comment' => 'El Principito nunca deja de sorprender, cada lectura descubre algo nuevo.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Sports products reviews
            [
                'user_id' => 9,
                'product_id' => 32,
                'rating' => 4,
                'comment' => 'Excelente bicicleta para principiantes en el mountain bike.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'user_id' => 10,
                'product_id' => 34,
                'rating' => 5,
                'comment' => 'Balón de gran calidad, perfecto para partidos oficiales.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // Furniture reviews
            [
                'user_id' => 9,
                'product_id' => 28,
                'rating' => 4,
                'comment' => 'Muy cómodo como sofá y práctico como cama. Buena calidad.',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ];

        foreach ($reviews as $review) {
            Review::create($review);
        }
    }
}