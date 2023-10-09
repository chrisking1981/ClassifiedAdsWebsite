<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        // For "Vriendschap & Contact"
        DB::table('sub_categories')->insert([
            ['name' => 'Zoek vriendschap', 'slug' => 'zoek-vriendschap', 'main_category_id' => 1],
            ['name' => 'Zoek gezelschap', 'slug' => 'zoek-gezelschap', 'main_category_id' => 1],
            ['name' => 'Maatje voor evenementen', 'slug' => 'maatje-voor-evenementen', 'main_category_id' => 1]
        ]);

        // For "Relatie & Dating"
        DB::table('sub_categories')->insert([
            ['name' => 'Serieuze relatie', 'slug' => 'serieuze-relatie', 'main_category_id' => 2],
            ['name' => 'Casual dating', 'slug' => 'casual-dating', 'main_category_id' => 2],
            ['name' => 'Alleen koffie', 'slug' => 'alleen-koffie', 'main_category_id' => 2]
        ]);

        // For "Activiteiten & Evenementen"
        DB::table('sub_categories')->insert([
            ['name' => 'Sportmaatje', 'slug' => 'sportmaatje', 'main_category_id' => 3],
            ['name' => 'Cultuurmaatje', 'slug' => 'cultuurmaatje', 'main_category_id' => 3],
            ['name' => 'Uitgaanspartner', 'slug' => 'uitgaanspartner', 'main_category_id' => 3]
        ]);

        // ... and so on for other main categories
    }
}
