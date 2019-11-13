<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //关闭时间戳
    public $timestamps = false;

    //可更改字段
    protected $fillable = [
        'name', 'description',
    ];
}
