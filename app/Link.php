<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    protected $table = 'link';
    protected $fillable = [
        'title',
        'link',
        'important_level'
    ];
}
