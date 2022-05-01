<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberAndMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members_and_menus')->insert([
            [
                'id' => 1,
                'member_id' => 1,
                'm_menu_id' => 1,
                'date' => '2022-04-18',
                'time_type' => 1,
                'memo' => 'メモテスト',
                'operation_user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
