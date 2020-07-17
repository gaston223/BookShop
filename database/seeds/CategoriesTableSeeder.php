<?php

use App\Categories;
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
        Categories::create([
            'name' => 'Gestion de Projet',
            'slug' => Str::slug('Gestion de Projet')
        ]);
        Categories::create([
            'name' => 'Développement Web',
            'slug' => Str::slug('Développement Web')
        ]);
        Categories::create([
            'name' => 'Software craftsmanship',
            'slug' => Str::slug('Software craftsmanship')
        ]);
        Categories::create([
            'name' => 'Marketing',
            'slug' => Str::slug('Marketing')
        ]);
        Categories::create([
            'name' => 'Système et réseaux',
            'slug' => Str::slug('Système et réseaux')
        ]);
    }
}
