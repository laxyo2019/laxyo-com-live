<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
	protected $fillable = [];

	protected $table = 'job_posts';
	
	public function replies()
	{
		return $this->hasMany('App\Models\JobReply');
	}
}