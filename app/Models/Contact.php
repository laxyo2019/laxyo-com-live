<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
	protected $table = 'form_contacts';
	protected $fillable = ['name', 'email', 'address', 'mobile', 'message'];
}