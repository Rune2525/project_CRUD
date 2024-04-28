<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
 
            ['post' => 'ナプキンやハンカチをハート型にたたむ方法♡可愛い♡'],
             
            ['post' => '３Dラテアート飲んでみたい．．．'],
             
            ['post' => 'ンダホさんが美少女枠で売られている(笑)'],
             
            ['post' => '久々にハンドメイドの材料会に行こうかな'],
             
            ['post' => '「鬼滅の刃」を見たい父　VS　「真犯人フラグ」を見たい兄　ファイッ！']
             
            ]);
             
    }
}
