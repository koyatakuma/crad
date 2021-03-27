<?php

use Illuminate\Database\Seeder;

class PrefsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('prefs')->delete();
        $list =[
            ['id' => 1	, 'name'=> '北海道'],
            ['id' => 2	, 'name'=> '青森県'],
            ['id' => 3	, 'name'=> '宮城県'],
            ['id' => 5	, 'name'=> '秋田県'],
            ['id' => 6	, 'name'=> '山形県'],
            ['id' => 7	, 'name'=> '福島県'],
            ['id' => 8	, 'name'=> '茨城県'],
            ['id' => 9	, 'name'=> '栃木県'],
            ['id' => 10	, 'name'=> '群馬県'],
            ['id' => 11	, 'name'=> '埼玉県'],
            ['id' => 12	, 'name'=> '千葉県'],
            ['id' => 13	, 'name'=> '東京都'],
            ['id' => 14	, 'name'=> '神奈川'],
            ['id' => 15	, 'name'=> '新潟県'],
            ['id' => 16	, 'name'=> '富山県'],
            ['id' => 17	, 'name'=> '石川県'],
            ['id' => 18	, 'name'=> '福井県'],
            ['id' => 19	, 'name'=> '山梨県'],
            ['id' => 20	, 'name'=> '長野県'],
            ['id' => 21	, 'name'=> '島根県'],
            ['id' => 33	, 'name'=> '岡山県'],
            ['id' => 34	, 'name'=> '広島県'],
            ['id' => 35	, 'name'=> '山口県'],
            ['id' => 36	, 'name'=> '徳島県'],
            ['id' => 37	, 'name'=> '香川県'],
            ['id' => 38	, 'name'=> '愛媛県'],
            ['id' => 39	, 'name'=> '高知県'],
            ['id' => 40	, 'name'=> '福岡県'],
            ['id' => 41	, 'name'=> '佐賀県'],
            ['id' => 42	, 'name'=> '長崎県'],
            ['id' => 43	, 'name'=> '熊本県'],
            ['id' => 44	, 'name'=> '大分県'],
            ['id' => 45	, 'name'=> '宮崎県'],
            ['id' => 46	, 'name'=> '鹿児島県'],
            ['id' => 47	, 'name'=> '沖縄県']
        ];

        DB::table('prefs')->insert($list);

    }
}
