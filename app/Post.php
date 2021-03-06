<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        
    'title',
    'text',
    'likes',
    'category_id',

    ];

    public function category() { //DA UNO A MOLTI
        return $this -> belongsTo(Category::class);
    }
    
    public function tags() {
        return $this -> belongsToMany(Tag::class);
    }
}
