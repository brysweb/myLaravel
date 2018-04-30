<?php

use Illuminate\Database\Seeder;

class RoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rooms')->insert([
            //'roomID' => 1,
            'name' => 'living room',
            'comments' => '2 windows',
            'systemID' => '4',
            'created_at' => now(),
            'updated_at' => now(),
            // 'imageFileName' => 'bry.jpg',
            // 'password' => bcrypt('brybry'),
        ]);
    }
}
