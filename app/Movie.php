<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model{
  use SoftDeletes;

  protected $table = 'movies';

  protected $fillable = [
    'title',
    'img_movie',
    'slug',
    'year',
    'synopsis',
    'created_at',
    'updated_at'
  ];

}
