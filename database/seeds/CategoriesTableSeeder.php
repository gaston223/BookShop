<?php

use App\Category;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Gestion de Projet',
            'slug' => Str::slug('Gestion de Projet')
        ]);
        Category::create([
            'name' => 'Développement Web',
            'slug' => Str::slug('Développement Web')
        ]);
        Category::create([
            'name' => 'Software craftsmanship',
            'slug' => Str::slug('Software craftsmanship')
        ]);
        Category::create([
            'name' => 'Marketing',
            'slug' => Str::slug('Marketing')
        ]);
        Category::create([
            'name' => 'Système et réseaux',
            'slug' => Str::slug('Système et réseaux')
        ]);
    }
}
