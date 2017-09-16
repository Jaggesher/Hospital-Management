<?php

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
        //
        DB::table('categories')->insert([
            'category' => 'Audiologist',
        ]);

        DB::table('categories')->insert([
            'category' => 'Anesthesiologist',
        ]);

        DB::table('categories')->insert([
            'category' => 'Cardiologist',
        ]);

        DB::table('categories')->insert([
            'category' => 'Dentist',
        ]);
        
        DB::table('categories')->insert([
            'category' => 'Gynecologist',
        ]);

        DB::table('categories')->insert([
            'category' => 'Medical Geneticist',
        ]);
    }
}
