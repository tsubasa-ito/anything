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
        DB::table('categories')->insert([
            ['id' => 1, 'category_name' => '日本料理'],
            ['id' => 2, 'category_name' => '寿司'],
            ['id' => 3, 'category_name' => '魚介料理・海鮮料理'],
            ['id' => 4, 'category_name' => '天ぷら'],
            ['id' => 5, 'category_name' => 'とんかつ'],
            ['id' => 6, 'category_name' => '串かつ・串揚げ'],
            ['id' => 7, 'category_name' => 'そば'],
            ['id' => 8, 'category_name' => 'うどん'],
            ['id' => 9, 'category_name' => '焼き鳥・串焼き'],
            ['id' => 10, 'category_name' => 'すき焼き'],
            ['id' => 11, 'category_name' => 'しゃぶしゃぶ'],
            ['id' => 12, 'category_name' => 'おでん'],
            ['id' => 13, 'category_name' => 'お好み焼き・もんじゃ焼き・たこ焼き'],
            ['id' => 14, 'category_name' => '丼もの（牛丼・親子丼など）'],
            ['id' => 15, 'category_name' => 'ハンバーガー'],
            ['id' => 16, 'category_name' => 'ステーキ'],
            ['id' => 17, 'category_name' => 'ハンバーグ'],
            ['id' => 18, 'category_name' => 'パスタ'],
            ['id' => 19, 'category_name' => 'オムライス'],
            ['id' => 20, 'category_name' => 'フレンチ'],
            ['id' => 21, 'category_name' => '四川料理'],
            ['id' => 22, 'category_name' => 'カレーライス'],
            ['id' => 23, 'category_name' => '欧風カレー'],
            ['id' => 24, 'category_name' => 'インドカレー'],
            ['id' => 25, 'category_name' => 'スープカレー'],
            ['id' => 26, 'category_name' => 'ラーメン'],
            ['id' => 27, 'category_name' => 'つけ麺'],
            ['id' => 28, 'category_name' => '油そば'],
            ['id' => 29, 'category_name' => '担々麺'],
            ['id' => 30, 'category_name' => 'ジンギスカン'],
            ['id' => 31, 'category_name' => '鍋'],
            ['id' => 32, 'category_name' => 'もつ鍋'],
            ['id' => 33, 'category_name' => 'てっちゃん焼き'],
            ['id' => 34, 'category_name' => 'サムギョップサル'],
            ['id' => 35, 'category_name' => 'ベトナム料理'],
            ['id' => 36, 'category_name' => 'タイ料理'],
            ['id' => 37, 'category_name' => '創作料理'],
        ]);
    }
}