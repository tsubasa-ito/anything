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
            [
                'id' => 1,
                'name'  => 'test1',
                'email'  => 'test@test.com',
                'password' => bcrypt('testtest'),
            ],
            [
                'id' => 2,
                'name'  => 'tsubasa',
                'email'  => 'tsubasa8770@gmail.com',
                'password' => bcrypt('tsubasa425'),
            ],
            [
                'id' => 3,
                'name'  => 'バッチャン',
                'email'  => 'batcan3216@gmail.com',
                'password' => bcrypt('bananaman425'),
            ]
        ]);
    }
}
