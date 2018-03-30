<?php
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    public function run(){
        DB::table('blog')->insert(
            array(
                array('title'=>'title 3', 'body'=> 'body 3'),
                array('title'=>'title 4', 'body'=> 'body 4')
            )
        );
    }
}