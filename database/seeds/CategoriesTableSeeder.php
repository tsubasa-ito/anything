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
            ['category_name' => '日本料理'],
            ['category_name' => '寿司'],
            ['category_name' => '魚介料理・海鮮料理'],
            ['category_name' => '天ぷら'],
            ['category_name' => 'とんかつ'],
            ['category_name' => '串かつ・串揚げ'],
            ['category_name' => 'そば'],
            ['category_name' => 'うどん'],
            ['category_name' => '焼き鳥・串焼き'],
            ['category_name' => 'すき焼き'],
            ['category_name' => 'しゃぶしゃぶ'],
            ['category_name' => 'おでん'],
            ['category_name' => 'お好み焼き・もんじゃ焼き・たこ焼き'],
            ['category_name' => '丼もの（牛丼・親子丼など）'],
            ['category_name' => 'ハンバーガー'],
            ['category_name' => 'ステーキ'],
            ['category_name' => 'ハンバーグ'],
            ['category_name' => 'パスタ'],
            ['category_name' => 'オムライス'],
            ['category_name' => 'フレンチ'],
            ['category_name' => '四川料理'],
            ['category_name' => 'カレーライス'],
            ['category_name' => '欧風カレー'],
            ['category_name' => 'インドカレー'],
            ['category_name' => 'スープカレー'],
            ['category_name' => 'ラーメン'],
            ['category_name' => 'つけ麺'],
            ['category_name' => '油そば'],
            ['category_name' => '担々麺'],
            ['category_name' => 'ジンギスカン'],
            ['category_name' => '鍋'],
            ['category_name' => 'もつ鍋'],
            ['category_name' => 'てっちゃん焼き'],
            ['category_name' => 'サムギョップサル'],
            ['category_name' => 'ベトナム料理'],
            ['category_name' => 'タイ料理'],
            ['category_name' => '創作料理'],
        ]);
    }
}