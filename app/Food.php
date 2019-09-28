<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $fillable = [
        'user_id', 'categoryid_one', 'categoryid_two', 'categoryid_three', 'categoryid_four', 'categoryid_five', 'comment', 'created_at', 'updated_at'
    ];

    public function user(){
        return $this->belongsTo(\App\User::class, 'user_id');
    }

    public function category_one(){
        return $this->belongsTo(\App\Category::class, 'categoryid_one');
    }
    public function category_two(){
        return $this->belongsTo(\App\Category::class, 'categoryid_two');
    }
    public function category_three(){
        return $this->belongsTo(\App\Category::class, 'categoryid_three');
    }
    public function category_four(){
        return $this->belongsTo(\App\Category::class, 'categoryid_four');
    }
    public function category_five(){
        return $this->belongsTo(\App\Category::class, 'categoryid_five');
    }


}
