<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Todo;

class TodoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item =  Todo::create([
            'title' => '勉強',
            'is_status' => '0',
        ]);

        $item =  Todo::create([
            'title' => '買い物',
            'is_status' => '0',
        ]);
    }
}
