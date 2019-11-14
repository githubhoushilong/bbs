<?php

namespace App\Models;

class Topic extends Model
{
    protected $fillable = ['title', 'body', 'user_id', 'category_id', 'reply_count', 'view_count', 'last_reply_user_id', 'order', 'excerpt', 'slug'];

    //话题与分类一对一
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //一个话题属于一个作者
    public function user(){
        return $this->belongsTo(User::class);
    }
}
