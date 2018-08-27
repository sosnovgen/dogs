<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $fillable = ['title'];
    protected $attributes = array (
        'title' => 'обычная'
    );
    
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
}
