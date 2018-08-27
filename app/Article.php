<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [
        'title', 'content', 'preview', 'meta_description', 'meta_keywords', 'category_id', 'group_id'
    ];

    protected $attributes = [
        'meta_description' => 'Ньюфаундленд, описание породы, фото Ньюфаундленда, характер, уход, кормление, здоровье, дрессировка, цена щенков',
        'meta_keywords' => 'Ньюфаундленд, породы собак, информация, название, описание, фото Ньюфаундленда, характер, уход, кормление, здоровье, болезни, оценка, факты, цена щенков, отзывы, дрессировка',
    ];


    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }


    public function group()
    {
        return $this->belongsTo('App\Group', 'group_id');
    }






}
