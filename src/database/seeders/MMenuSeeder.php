<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_menus')->insert([
            [
                'id' => 1,
                'name' => 'ごはん',
                'menu_type' => 1,
                'description' => '白飯',
                'url' => '詳細テスト',
                'is_default' => 1,
                'sort_no' => 10,
                'operation_user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
