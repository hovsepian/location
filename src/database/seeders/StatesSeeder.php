<?php

namespace Webs\Database;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StatesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = file_get_contents(__DIR__ . '/states.sql');
        DB::unprepared($sql);
    }
}
