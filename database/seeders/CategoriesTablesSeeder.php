<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'Jeux',
            'slug' => 'jeux'
        ]);
        Category::create([
            'name' => 'Livre',
            'slug' => 'livre'
        ]);
        Category::create([
            'name' => 'Nourriture',
            'slug' => 'nourriture'
        ]);
        Category::create([
            'name' => 'Tech',
            'slug' => 'tech'
        ]);
        Category::create([
            'name' => 'Sport',
            'slug' => 'sport'
        ]);
    }
}
