<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body'
    ];//we say laravel the fields are ok to create data in database = this is mass assignment
}
