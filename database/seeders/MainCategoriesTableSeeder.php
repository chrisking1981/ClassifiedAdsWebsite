<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MainCategoriesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('main_categories')->insert([
            ['name' => 'Vriendschap & Contact', 'slug' => 'vriendschap-contact'],
            ['name' => 'Relatie & Dating', 'slug' => 'relatie-dating'],
            ['name' => 'Activiteiten & Evenementen', 'slug' => 'activiteiten-evenementen'],
            ['name' => 'Hobby & Vrije tijd', 'slug' => 'hobby-vrije-tijd'],
            ['name' => 'Reisgenoten', 'slug' => 'reisgenoten'],
            ['name' => 'Studie & Opleiding', 'slug' => 'studie-opleiding'],
            ['name' => 'Zakelijk netwerken', 'slug' => 'zakelijk-netwerken'],
            ['name' => 'Overig', 'slug' => 'overig']
        ]);
    }
}
