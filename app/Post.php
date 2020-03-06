<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'titre',
        'contenu',
        'date',
    ];

    protected $dates = [
        'date',
    ];
}
