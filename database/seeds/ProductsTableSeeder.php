<?php

use App\Categories;
use App\Products;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Categories::create([
            'name' => 'Développement Web'
        ]);

        $category2 = Categories::create([
            'name' => 'Marketing'
        ]);

        $category3 = Categories::create([
            'name' => 'Design'
        ]);

        $category4 = Categories::create([
            'name' => 'Gestion de Projet'
        ]);

        Products::create([
            'name' => "Manuel de l'autodidacte en informatique",
            'price' => 29.99,
            'image' => "autodidacte.jpg",
            'slug' => Str::slug('Manuel de l\'autodidacte en informatique'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 1
        ]);
        Products::create([
            'name' => "Angular et Node.Js",
            'price' => 39.99,
            'image' => "angular-nodejs.jpg",
            'slug' => Str::slug('Angular et Node.Js'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 2
        ]);
        Products::create([
            'name' => "La Boite à outil du Chef de projet",
            'price' => 24.99,
            'image' => "chefdeprojet.jpg",
            'slug' => Str::slug('La Boite à outil du Chef de projet'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 3
        ]);
        Products::create([
            'name' => "Clean Architecture",
            'price' => 49.99,
            'image' => "clean-architecture.jpg",
            'slug' => Str::slug('Clean Architecture'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 4,
        ]);
        Products::create([
            'name' => "Clean Agile",
            'price' => 35.99,
            'image' => "clean-agile.jpg",
            'slug' => Str::slug('Clean Agile'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 1
        ]);
        Products::create([
            'name' => "Clean Code",
            'price' => 59.99,
            'image' => "clean-code.jpg",
            'slug' => Str::slug('Clean Code'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 2
        ]);
        Products::create([
            'name' => "Gestion de Projet Agile",
            'price' => 45.99,
            'image' => "methode-agile.jpg",
            'slug' => Str::slug('Gestion de Projet Agile'),
            'subtitle'=> 'TEst',
            'Description'=> 'TEst',
            'category_id' => 3
        ]);
        Products::create([
            'name' => "PHP et MYSQL",
            'price' => 29.99,
            'image' => "php-mysql.jpg",
            'slug' => Str::slug('PHP et MYSQL'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 4
        ]);
        Products::create([
            'name' => "Des Applications modernes avec React",
            'price' => 39.99,
            'image' => "react.jpg",
            'slug' => Str::slug('Des Applications modernes avec React'),
            'subtitle'=> 'TEst',
            'description'=> 'TEst',
            'category_id' => 1
        ]);
    }
}
