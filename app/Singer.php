<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Singer extends Model
{
	protected $fillable = ['name', 'published', 'created_by', 'modified_by'];

	public function disks()
	{
		return $this->morphedByMany('App\Disk', 'singeryable');
	}
	
	public function scopeSingers($query){
		return $query->orderBy('created_at','desc')->get();
	}  
}
