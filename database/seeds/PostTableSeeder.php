<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'title' => str_random(10),
            'post' => str_random(50),
            'parent_id' => 0,
            'published' => 0,
            'name_create' => str_random(10)
        ]);
    }
}
