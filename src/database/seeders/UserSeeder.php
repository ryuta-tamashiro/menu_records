<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'surname' => 'テスト',
                'given_name' => 'イチロウ',
                'surname_kana' => 'テスト',
                'given_name_kana' => 'イチロウ',
                'email' => 'xxxx@xxxx.xxx',
                'password' => 'xxxx',
                'user_type' => 1,
                'operation_user_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
                'deleted_at' => null,
            ],
        ]);
    }
}
