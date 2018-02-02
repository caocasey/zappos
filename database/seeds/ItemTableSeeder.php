<?php

use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('items')->insert([
            'iid' => 1,
            'iname' => 'tomato',
            'idescription' => 'fresh style',
            'menu_mid' => 2
        ]);
        DB::table('items')->insert([
            'iid' => 2,
            'iname' => 'chicken',
            'idescription' => 'sweet and salt',
            'menu_mid' => 1
        ]);
		DB::table('items')->insert([
            'iid' => 3,
            'iname' => 'german cool beer',
            'idescription' => 'sweet and cool',
            'menu_mid' => 3
        ]);


    }
}
