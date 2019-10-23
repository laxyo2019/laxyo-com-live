<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [];
	
	public function replies()
	{
		return $this->hasMany('App\Models\JobReply');
	}
}