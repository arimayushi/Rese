<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    $param = [
    'name' => '仙人',
    'area' => '東京都',
    'genre' => '寿司'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '牛助',
    'area' => '大阪府',
    'genre' => '焼肉'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '戦慄',
    'area' => '福岡県',
    'genre' => '居酒屋'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => 'ルーク',
    'area' => '東京都',
    'genre' => 'イタリアン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '志摩屋',
    'area' => '福岡県',
    'genre' => 'ラーメン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '香',
    'area' => '東京都',
    'genre' => '焼肉'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => 'JJ',
    'area' => '大阪府',
    'genre' => 'イタリアン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => 'らーめん極み',
    'area' => '東京都',
    'genre' => 'ラーメン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '鳥雨',
    'area' => '大阪府',
    'genre' => '居酒屋'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '築地色合',
    'area' => '東京都',
    'genre' => '寿司'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '晴海',
    'area' => '大阪府',
    'genre' => '焼肉'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '三子',
    'area' => '福岡県',
    'genre' => '焼肉'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '八戒',
    'area' => '東京都',
    'genre' => '居酒屋'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '福助',
    'area' => '大阪府',
    'genre' => '寿司'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => 'ラー北',
    'area' => '東京都',
    'genre' => 'ラーメン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '翔',
    'area' => '大阪府',
    'genre' => '居酒屋'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '経緯',
    'area' => '東京都',
    'genre' => '寿司'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '漆',
    'area' => '東京都',
    'genre' => '焼肉'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => 'THE TOOL',
    'area' => '福岡県',
    'genre' => 'イタリアン'
    ];
    DB::table('shops')->insert($param);
    $param = [
    'name' => '木船',
    'area' => '大阪府',
    'genre' => '寿司'
    ];
    DB::table('shops')->insert($param);
    }
}
