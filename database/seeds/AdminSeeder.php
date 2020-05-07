<?php

use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            [
                'name' => "Adminstrator",
                'email' => 'etinosaobaseki@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => "Adminstrator",
                'email' => 'devassesment@parkwayprojects.com',
                'password' => bcrypt('secret'),
            ]
        ]);
    }
}
