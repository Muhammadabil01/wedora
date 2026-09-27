<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template;

class TemplateSeeder extends Seeder
{
    public function run(): void
    {
        Template::create([
            'slug' => 'amora',
            'name' => 'Amora',
            'category' => 'Romantic',
            'price' => 399000,
            'description' => 'Desain romantis dan elegan untuk pernikahan yang berkesan.',
            'image' => 'wedding-evening.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'selene',
            'name' => 'Selene',
            'category' => 'Minimalist',
            'price' => 299000,
            'description' => 'Desain minimalis dengan tampilan bersih dan modern.',
            'image' => 'wedding-ivory.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'laras',
            'name' => 'Laras',
            'category' => 'Traditional',
            'price' => 349000,
            'description' => 'Nuansa tradisional yang dipadukan dengan tampilan digital modern.',
            'image' => 'wedding-traditional.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'noire',
            'name' => 'Noire',
            'category' => 'Luxury',
            'price' => 499000,
            'description' => 'Tampilan mewah dan elegan untuk pernikahan eksklusif.',
            'image' => 'wedding-evening.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'alba',
            'name' => 'Alba',
            'category' => 'Modern',
            'price' => 349000,
            'description' => 'Desain modern dengan tampilan simpel dan elegan.',
            'image' => 'wedding-garden.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'florentina',
            'name' => 'Florentina',
            'category' => 'Floral',
            'price' => 399000,
            'description' => 'Desain floral yang lembut dan elegan untuk hari spesial.',
            'image' => 'wedding-garden.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'aksara',
            'name' => 'Aksara',
            'category' => 'Traditional',
            'price' => 449000,
            'description' => 'Perpaduan budaya tradisional dan desain digital modern.',
            'image' => 'wedding-traditional.jpg',
            'rating' => 4.9,
        ]);

        Template::create([
            'slug' => 'celeste',
            'name' => 'Celeste',
            'category' => 'Luxury',
            'price' => 599000,
            'description' => 'Template premium dengan tampilan mewah dan personal.',
            'image' => 'wedding-evening.jpg',
            'rating' => 4.9,
        ]);
    }
}