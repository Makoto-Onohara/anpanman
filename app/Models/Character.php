<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    // テーブル名
    protected $table = 'characters';

    // 可変項目
    protected $fillable = 
    [
        'name',
        'image_path',
        'genre_id',
    ];
}
