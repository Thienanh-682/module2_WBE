<?php

use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $blog = new \App\Blog();
        $blog->name = 'Thien anh';
        $blog->category = 'thien anh';
        $blog->author = 'thienanh';
        $blog->save();
    }
}
