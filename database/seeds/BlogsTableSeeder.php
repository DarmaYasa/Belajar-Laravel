<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'title' => str_random(10),
            'writer' => 'test',
            'create_at' => '2018-08-01 00:00:00',
            'content' => 'test',
        ]);
    }
}
