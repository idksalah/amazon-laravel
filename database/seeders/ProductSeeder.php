<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            [
                'id' => 1,
                'name' => 'iPhone 15 Pro Max',
                'image' => 'productos/electronics/iphoneProMax.png',
                'price' => 1199,
                'description' => 'El iPhone más avanzado hasta la fecha',
                'stock' => 50,
                'category_id' => 1,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 9, 22),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 2,
                'name' => 'Samsung Galaxy S24 Ultra',
                'image' => 'productos/electronics/Samsung-Galaxy-S24-Ultra.png',
                'price' => 1299,
                'description' => 'Pantalla Dynamic AMOLED 2X, Snapdragon 8 Gen 3, S-Pen integrado',
                'stock' => 45,
                'category_id' => 1,
                'user_id' => 10,
                'created_at' => Carbon::create(2024, 1, 17),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 3,
                'name' => 'MacBook Air M3',
                'image' => 'productos/electronics/macbookair3.png',
                'price' => 999,
                'description' => 'El portátil más delgado y ligero de Apple con el potente chip M3',
                'stock' => 30,
                'category_id' => 1,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 11, 8),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 4,
                'name' => 'iPad Pro M2',
                'image' => 'productos/electronics/ipadm2.png',
                'price' => 1099,
                'description' => 'La tablet más potente de Apple con el chip M2',
                'stock' => 40,
                'category_id' => 1,
                'user_id' => 6,
                'created_at' => Carbon::create(2022, 10, 18),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 5,
                'name' => 'Sony WH-1000XM5',
                'image' => 'productos/electronics/sonyauriculares.avif',
                'price' => 399,
                'description' => 'Los auriculares con la mejor cancelación de ruido del mercado',
                'stock' => 60,
                'category_id' => 1,
                'user_id' => 9,
                'created_at' => Carbon::create(2022, 5, 20),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 6,
                'name' => 'Bose SoundLink Revolve+',
                'image' => 'productos/electronics/altavozbose.png',
                'price' => 329,
                'description' => 'Altavoz portátil con sonido 360° y resistencia al agua',
                'stock' => 35,
                'category_id' => 1,
                'user_id' => 10,
                'created_at' => Carbon::create(2021, 7, 15),
                'updated_at' => Carbon::now()
            ],
            // Fashion products
            [
                'id' => 7,
                'name' => 'Vestido de Verano',
                'image' => 'productos/fashion/producto1.png',
                'price' => 49.99,
                'description' => 'Vestido ligero y elegante perfecto para días soleados',
                'stock' => 100,
                'category_id' => 2,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 2, 10),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 8,
                'name' => 'Camisa de Algodón',
                'image' => 'productos/fashion/producto2.png',
                'price' => 29.99,
                'description' => 'Camisa clásica de algodón con corte moderno',
                'stock' => 150,
                'category_id' => 2,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 3, 15),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 9,
                'name' => 'Pantalones Cortos',
                'image' => 'productos/fashion/producto3.png',
                'price' => 39.99,
                'description' => 'Pantalones cortos versátiles para el verano',
                'stock' => 120,
                'category_id' => 2,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 4, 20),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 10,
                'name' => 'Chaqueta de Cuero',
                'image' => 'productos/fashion/producto4.png',
                'price' => 99.99,
                'description' => 'Chaqueta de cuero genuino con diseño clásico',
                'stock' => 80,
                'category_id' => 2,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 5, 25),
                'updated_at' => Carbon::now()
            ],
            // Beauty products
            [
                'id' => 11,
                'name' => 'Crema Hidratante',
                'image' => 'productos/belleza/producto1.png',
                'price' => 29.99,
                'description' => 'Crema hidratante intensiva para todo tipo de piel',
                'stock' => 200,
                'category_id' => 3,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 6, 10),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 12,
                'name' => 'Sérum Facial',
                'image' => 'productos/belleza/producto2.png',
                'price' => 49.99,
                'description' => 'Sérum antienvejecimiento con ácido hialurónico',
                'stock' => 150,
                'category_id' => 3,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 7, 15),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 13,
                'name' => 'Maquillaje Líquido',
                'image' => 'productos/belleza/producto3.png',
                'price' => 19.99,
                'description' => 'Base de maquillaje de larga duración y cobertura media',
                'stock' => 180,
                'category_id' => 3,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 8, 20),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 14,
                'name' => 'Champú Nutritivo',
                'image' => 'productos/belleza/producto4.png',
                'price' => 24.99,
                'description' => 'Champú nutritivo para cabello seco y dañado',
                'stock' => 250,
                'category_id' => 3,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 9, 25),
                'updated_at' => Carbon::now()
            ],
            // Home products
            [
                'id' => 15,
                'name' => 'Sofá Moderno',
                'image' => 'productos/hogar/producto1.png',
                'price' => 799,
                'description' => 'Sofá moderno de 3 plazas con tapizado premium',
                'stock' => 20,
                'category_id' => 4,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 2, 10),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 16,
                'name' => 'Mesa de Comedor',
                'image' => 'productos/hogar/producto2.png',
                'price' => 499,
                'description' => 'Mesa de comedor extensible de madera maciza',
                'stock' => 30,
                'category_id' => 4,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 3, 15),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 17,
                'name' => 'Silla de Oficina',
                'image' => 'productos/hogar/producto3.png',
                'price' => 199,
                'description' => 'Silla ergonómica con soporte lumbar ajustable',
                'stock' => 50,
                'category_id' => 4,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 4, 20),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 18,
                'name' => 'Lámpara de Pie',
                'image' => 'productos/hogar/producto4.png',
                'price' => 89.99,
                'description' => 'Lámpara de pie moderna con luz LED regulable',
                'stock' => 40,
                'category_id' => 4,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 5, 25),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 19,
                'name' => 'Cortinas de Tela',
                'image' => 'productos/hogar/producto5.png',
                'price' => 49.99,
                'description' => 'Cortinas opacas de alta calidad',
                'stock' => 100,
                'category_id' => 4,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 6, 30),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 20,
                'name' => 'Alfombra Suave',
                'image' => 'productos/hogar/producto6.png',
                'price' => 129.99,
                'description' => 'Alfombra de pelo largo y suave',
                'stock' => 35,
                'category_id' => 4,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 7, 5),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 21,
                'name' => 'Estantería de Madera',
                'image' => 'productos/hogar/producto7.png',
                'price' => 299,
                'description' => 'Estantería modular de madera natural',
                'stock' => 25,
                'category_id' => 4,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 8, 10),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 22,
                'name' => 'Cojines Decorativos',
                'image' => 'productos/hogar/producto8.png',
                'price' => 19.99,
                'description' => 'Set de cojines decorativos de alta calidad',
                'stock' => 150,
                'category_id' => 4,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 9, 15),
                'updated_at' => Carbon::now()
            ],
            // Books products
            [
                'id' => 23,
                'name' => 'Cien Años de Soledad',
                'image' => 'productos/libros/cienanossoledad.webp',
                'price' => 19.99,
                'description' => 'Obra maestra del realismo mágico',
                'stock' => 100,
                'category_id' => 5,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 2, 10),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 24,
                'name' => 'El Principito',
                'image' => 'productos/libros/principito.webp',
                'price' => 14.99,
                'description' => 'Un clásico atemporal de la literatura universal',
                'stock' => 150,
                'category_id' => 5,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 3, 15),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 25,
                'name' => '1984',
                'image' => 'productos/libros/el_1984.webp',
                'price' => 12.99,
                'description' => 'La distopía más influyente de todos los tiempos',
                'stock' => 120,
                'category_id' => 5,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 4, 20),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 26,
                'name' => 'Orgullo y Prejuicio',
                'image' => 'productos/libros/orgullo_prejuicio.webp',
                'price' => 16.99,
                'description' => 'Una obra maestra de la literatura romántica',
                'stock' => 80,
                'category_id' => 5,
                'user_id' => 10,
                'created_at' => Carbon::create(2023, 5, 25),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 27,
                'name' => 'El Alquimista',
                'image' => 'productos/libros/el_alquimista.webp',
                'price' => 18.99,
                'description' => 'Una fábula sobre seguir tus sueños',
                'stock' => 90,
                'category_id' => 5,
                'user_id' => 9,
                'created_at' => Carbon::create(2023, 6, 30),
                'updated_at' => Carbon::now()
            ],

        // Furniture products
        [
            'id' => 28,
            'name' => 'Sofá Cama',
            'image' => 'productos/muebles/sofa_cama.webp',
            'price' => 599,
            'description' => 'Sofá cama convertible con almacenamiento',
            'stock' => 25,
            'category_id' => 6,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 2, 10),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 29,
            'name' => 'Mesa de Centro',
            'image' => 'productos/muebles/mesa_centro.webp',
            'price' => 299,
            'description' => 'Mesa de centro moderna con almacenamiento',
            'stock' => 30,
            'category_id' => 6,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 3, 15),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 30,
            'name' => 'Silla de Comedor',
            'image' => 'productos/muebles/silla_comedor.webp',
            'price' => 89.99,
            'description' => 'Silla de comedor ergonómica y elegante',
            'stock' => 60,
            'category_id' => 6,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 4, 20),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 31,
            'name' => 'Estantería Modular',
            'image' => 'productos/muebles/estanteria_modular.webp',
            'price' => 399,
            'description' => 'Estantería modular personalizable',
            'stock' => 20,
            'category_id' => 6,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 5, 25),
            'updated_at' => Carbon::now()
        ],
        // Sports products
        [
            'id' => 32,
            'name' => 'Bicicleta de Montaña',
            'image' => 'productos/deporte/bicicleta_montana.avif',
            'price' => 499,
            'description' => 'Bicicleta de montaña profesional todo terreno',
            'stock' => 15,
            'category_id' => 7,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 2, 10),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 33,
            'name' => 'Raqueta de Tenis',
            'image' => 'productos/deporte/raqueta_tenis.avif',
            'price' => 199,
            'description' => 'Raqueta de tenis profesional con tecnología avanzada',
            'stock' => 40,
            'category_id' => 7,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 3, 15),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 34,
            'name' => 'Balón de Fútbol',
            'image' => 'productos/deporte/balon_futbol.avif',
            'price' => 29.99,
            'description' => 'Balón de fútbol profesional de competición',
            'stock' => 100,
            'category_id' => 7,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 4, 20),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 35,
            'name' => 'Zapatillas de Running',
            'image' => 'productos/deporte/zapatillas_running.avif',
            'price' => 89.99,
            'description' => 'Zapatillas de running con tecnología de amortiguación',
            'stock' => 75,
            'category_id' => 7,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 5, 25),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 36,
            'name' => 'Equipo de Pesca',
            'image' => 'productos/deporte/equipo_de_pesca.avif',
            'price' => 299,
            'description' => 'Kit completo de pesca deportiva',
            'stock' => 25,
            'category_id' => 7,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 6, 30),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 37,
            'name' => 'Patines en Línea',
            'image' => 'productos/deporte/patines_linea.avif',
            'price' => 149,
            'description' => 'Patines en línea profesionales ajustables',
            'stock' => 30,
            'category_id' => 7,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 7, 5),
            'updated_at' => Carbon::now()
        ],
        // ... vehicles products ...
        [
            'id' => 42,
            'name' => 'Coche Eléctrico',
            'image' => 'productos/cochesymoto/coche_electrico.webp',
            'price' => 39999,
            'description' => 'Vehículo eléctrico de última generación',
            'stock' => 10,
            'category_id' => 8,
            'user_id' => 10,
            'created_at' => Carbon::create(2023, 6, 5),
            'updated_at' => Carbon::now()
        ],
        [
            'id' => 43,
            'name' => 'Moto Deportiva',
            'image' => 'productos/cochesymoto/moto_deportiva.png',
            'price' => 19999,
            'description' => 'Moto deportiva de alto rendimiento',
            'stock' => 6,
            'category_id' => 8,
            'user_id' => 9,
            'created_at' => Carbon::create(2023, 7, 10),
            'updated_at' => Carbon::now()
        ]
    ];

    foreach ($products as $product) {
        Product::updateOrCreate(
            ['id' => $product['id']],
            $product
        );
    }
}
}