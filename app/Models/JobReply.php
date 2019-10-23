<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobReply extends Model
{
	protected $fillable = [];
	
  public function job()
	{
		return $this->belongsTo('App\Models\Job');
	}
}