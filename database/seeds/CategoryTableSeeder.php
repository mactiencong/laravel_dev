<?php
use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    public function run(){
        DB::table('category')->insert(
            array(
                array('name'=>'Category 1'),
                array('name'=>'Category 2'),
            )
        );
    }
}