<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';

    public function category(){
        $category_list = array();
        $categories = $this->belongsToMany('App\Category', 'category_blog')->get();
        foreach($categories as $category){
            $category_list[] = $category->name;
        }
        return implode(',', $category_list);
    }
}
