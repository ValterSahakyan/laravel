<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
    protected $fillable = ['name', 'published', 'created_by', 'modified_by'];
      
}
