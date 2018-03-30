<?php
use Illuminate\Database\Seeder;

class CategoryBlogTableSeeder extends Seeder
{
    public function run(){
        DB::table('category_blog')->insert(
            array(
                array('category_id'=>'1', 'blog_id'=> '1'),
                array('category_id'=>'2', 'blog_id'=> '1'),
                array('category_id'=>'1', 'blog_id'=> '2'),
                array('category_id'=>'2', 'blog_id'=> '3'),
            )
        );
    }
}