<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'title' => '勉強',
            'is_status' => '0',
        ];
        DB::table('todo')->insert($param);

        $param = [
            'title' => '買い物',
            'is_status' => '0',
        ];
        DB::table('todo')->insert($param);
    }
}
