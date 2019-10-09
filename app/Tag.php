<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = [
        'tag_name'
    ];
    public function foods(){
        return $this->belongsToMany(\App\Food::class);
    }
}
