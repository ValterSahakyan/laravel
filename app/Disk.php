<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disk extends Model
{
	protected $fillable = ['name', 'created_by', 'modified_by'];

	public function singers()
	{
		return $this->morphToMany('App\Singer', 'singeryable');
	}
	
	public function scopeDisks($query){
		return $query->orderBy('created_at','desc')->get();
	}     

}
