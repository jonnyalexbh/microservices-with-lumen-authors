<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     */
    protected $fillable = [
        'name',
        'gender',
        'country',
    ];
}
