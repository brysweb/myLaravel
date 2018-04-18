<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Bry',
            'systemID' => 1,
            'email' => 'bry@bry.com',
            'imageFileName' => 'bry.jpg',
            'password' => bcrypt('brybry'),
        ]);
    }
}
