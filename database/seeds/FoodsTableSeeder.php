<?php

use Illuminate\Database\Seeder;

class FoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('foods')->insert([
            [
                'id' => 1,
                'user_id' => 1,
                'foodid_one'  => 5,
                'foodid_two'  => 4,
                'foodid_three'  => 3,
                'foodid_four'  => 2,
                'foodid_five'  => 1,
                'comment'  => 'ガツガツ食べたいぜ',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ]
        ]);
    }
}
