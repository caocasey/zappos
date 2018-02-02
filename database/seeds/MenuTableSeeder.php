<?php

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('menus')->insert([
            'mid' => 1,
            'mname' => 'fry rice menu',
            'serve_time' => 'dinner',
            'mdescription' => 'tranditional chinese rice',
            'restaurant_rid' => 2
        ]);
        DB::table('menus')->insert([
            'mid' => 2,
            'mname' => 'vegetable menu',
            'serve_time' => 'noon',
            'mdescription' => 'health food',
            'restaurant_rid' => 1
        ]);
        DB::table('menus')->insert([
            'mid' => 3,
            'mname' => 'beer menu',
            'serve_time' => 'All day',
            'mdescription' => 'Beer from germany',
            'restaurant_rid' => 3
        ]);
        DB::table('menus')->insert([
            'mid' => 4,
            'mname' => 'suprice menu',
            'serve_time' => 'dinner',
            'mdescription' => 'secret made food',
            'restaurant_rid' => 1
        ]);
    }
}
