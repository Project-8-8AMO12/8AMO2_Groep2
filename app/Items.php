<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Items extends Model
{
    protected $fillable = ['title', 'subtitle', 'text', 'imageurl', 'pageurl', 'itemauthor', 'hidden'];
}
