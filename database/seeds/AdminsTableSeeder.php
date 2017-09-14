<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('admins')->insert([
            'name' => 'Jaggesher',
            'email' => 'jaggesher14@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Monmoy',
            'email' => 'iammonmoy@gmail.com',
            'password' => bcrypt('123456'),
        ]);

        DB::table('admins')->insert([
            'name' => 'Nandan',
            'email' => 'nandancse@gmail.com',
            'password' => bcrypt('123456'),
        ]);
    }
}
