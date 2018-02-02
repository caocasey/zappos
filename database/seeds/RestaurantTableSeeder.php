<?php

use Illuminate\Database\Seeder;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('restaurants')->insert([
            'rid' => 1,
            'rname' => 'chez moi',
            'rdescription' => 'french style'
        ]);
        DB::table('restaurants')->insert([
            'rid' => 2,
            'rname' => 'uncle li',
            'rdescription' => 'chinese style'
        ]);
        DB::table('restaurants')->insert([
            'rid' => 3,
            'rname' => '5 guys',
            'rdescription' => 'american style'
        ]);
    }
}
