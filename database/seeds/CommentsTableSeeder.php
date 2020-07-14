<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'coment' => str_random(10),
            'parent_id' => 0,
            'id_parent' => 0,
            'name_create' => str_random(10)
        ]);
    }
}
