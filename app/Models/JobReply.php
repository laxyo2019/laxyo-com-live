<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobReply extends Model
{
	use SoftDeletes;
	protected $fillable = [];
	
  public function job()
	{
		return $this->belongsTo('App\Models\Job');
	}
}